<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Log;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use PDF;
use Mail;
use App\Models\Media;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Karmendra\LaravelAgentDetector\AgentDetector;
use DB;
// use Carbon\Carbon;

class Helper
{
    // public static $random = random_int(100,999);
    // public function __construct($random){
    //     random = $random;

    // }
    public static function getuserrole($id = 0, $type = '')
    {

        $roles = [
            config('constants.admin') => __('global.admin'),
            config('constants.company') => __('global.company'),
            config('constants.innovator') => __('global.innovator'),
        ];

        $roleName = '';
        if ($id == 0) {
            if (!auth()->user()) {
                $roleName = '';
            } else {
                // dd(auth()->user()->email);
                $roleName = auth()->user()->roles->pluck('name')[0];
            }
        } else {
            $user = \App\Models\User::where(['id' => $id])->first();
            // dd($user->email);
            $roleName = $user->roles->pluck('name')[0];
        }
        if ($type == 'heading') {
            return $roles[$roleName];
        } else {
            return $roleName;
        }
    }

    public static function getAdminAction($dropdown = [])
    {
        return view('components.bt-dropdown', [
            'dropdown' => $dropdown
        ])->render();
    }

    public static function stripeCreateProduct($name)
    {
        try {
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $product = $stripe->products->create([
                'name' => $name,
            ]);
            return $product;
        } catch (\Exception $e) {
            Log::error($e);
            return false;
        }
    }

    public static function stripeCreatePlan($price, $product, $interval)
    {

        try {
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $plan = $stripe->plans->create([
                'amount' => $price * 100,
                'currency' => 'usd',
                'interval' => $interval,
                'product' => $product,
            ]);

            return $plan;
        } catch (\Exception $e) {
            Log::error($e);
            return false;
        }
    }

    public static function saveFiles($files, $directory)
    {
        try {
            $result = self::base64ToImage($files);
            if (explode('/', $result['type'])[1] == 'vnd.openxmlformats-officedocument.wordprocessingml.document') {
                $type = 'docx';
            } else {
                $type = explode('/', $result['type'])[1];
            }

            if (file_exists(public_path('uploads/' . $directory . '/' . $directory . '_' . time() . '.' . $type))) {
                @unlink(public_path('uploads/' . $directory . '\\' . $directory . '_' . time() . '.' . $type));
            }
            if (!file_exists(public_path('uploads/' . $directory)) && !is_dir(public_path('uploads/' . $directory))) {
                mkdir(public_path('uploads/' . $directory), 0777);
            }
            $path = public_path('uploads/' . $directory . '/' . $directory . '_' . time() . '.' . $type);

            $public_path = 'uploads/' . $directory . '/' . $directory . '_' . time() . '.' . $type;
            file_put_contents($path, $result['data']);

            return $public_path;
        } catch (\Exception $e) {
            Log::error($e);
            return false;
        }
    }

    public static function saveMedia($files,$model='',$file_type='main',$id=0)
    {
        $public_path = "";

        $directory = time();
        (int)$random = random_int(100,999);

       //  $id = request()->params('id')?request()->params('id'):$id;

    //    dd($files);
        try{
            if(is_array($files)){
                foreach($files as $file){
                    $exitMedia = Media::where('model',$model)->where('image_name',$file->getClientOriginalName())->
                where('model_id',$id)->first();

                    if(isset($exitMedia)){
                        return $exitMedia;
                    }
                    if (file_exists(public_path('media/'.$file->getClientOriginalName()))) {
                        @unlink(public_path('media/'.$file->getClientOriginalName()));
                    }
                    $path = public_path('media/');
                    $public_path = '/media/'.$file->getClientOriginalName();

                    // $public_path = asset('media/'.$file->getClientOriginalName());
                    $file->move($path,$file->getClientOriginalName());

                    $media = Media::where('model_id',$id)->where('img_type',$file_type)->first();
                    // dd($media);
                    if(isset($media)){
                        $updated = Media::where('model_id',$id)->where('img_type',$file_type)->update([
                            'image_url' => $public_path,
                            'model_id' => $id,
                            'model' => $model,
                            'image_name' => $file->getClientOriginalName(),
                            'img_type' => $file_type,
                            'extension' => $file->getClientOriginalExtension()
                        ]);
                    }else{
                        $media = Media::create([
                            'image_url' => $public_path,
                            'model_id' => $id,
                            'model' => $model,
                            'image_name' => $file->getClientOriginalName(),
                            'img_type' => $file_type,
                            'extension' => $file->getClientOriginalExtension()
                        ]);
                    }


                }

            }else{


                // dd($files->getClientOriginalName());
                $exitMedia = Media::where('model',$model)->where('image_name',$files->getClientOriginalName())->
                where('model_id',$id)->first();
              //  dd($exitMedia,$model,$files->getClientOriginalName());

                    if(isset($exitMedia)){
                        return $exitMedia;
                    }
                    if (file_exists(public_path('media/'.$files->getClientOriginalName()))) {
                        @unlink(public_path('media/'.$files->getClientOriginalName()));
                    }

                    $path = public_path('media/');
                    $public_path = '/media/'.$files->getClientOriginalName();
                    // $public_path = asset('media/'.$files->getClientOriginalName());
                    $files->move($path,$files->getClientOriginalName());
                    $media = Media::where('model_id',$id)->where('img_type',$file_type)->first();

                    if(isset($media)){
                        $updated = Media::where('model_id',$id)->where('img_type',$file_type)->update([
                            'image_url' => $public_path,
                            'model_id' => $id,
                            'model' => $model,
                            'image_name' => $files->getClientOriginalName(),
                            'img_type' => $file_type,
                            'extension' => $files->getClientOriginalExtension()
                        ]);
                    }else{
                        $media = Media::create([
                            'image_url' => $public_path,
                            'model_id' => $id,
                            'model' => $model,
                            'image_name' => $files->getClientOriginalName(),
                            'img_type' => $file_type,
                            'extension' => $files->getClientOriginalExtension()
                        ]);
                    }


            }


            return $media;

        }catch(\Exception $e){
            dd($e);
            $public_path = "media/image-not-found.png";
            Log::error($e);
            return false;
        }




    }

    public static function base64ToImage($data)
    {
        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);

        $data = base64_decode($data);
        //        dd($data);
        return [
            'data' => $data,
            'type' => $type,
        ];
    }
    // Firebase RealTime
    public static function realTimeNotification($message, $user_id, $type)
    {

        $firebase = (new Factory)
            ->withServiceAccount(public_path('ilaunch-18212-firebase-adminsdk-3c4j3-17f73d8f4c.json'))
            ->withProjectId('ilaunch-18212')
            ->withDatabaseUri(env('FIREBASE_DATABASE_URL'));

        $database = $firebase->createDatabase();
        $newPost = $database
            ->getReference('user_' . $user_id . '/' . $type . '_' . time() . $user_id)
            ->set([
                'title' => $message['title'],
                'body' => $message['message'],
            ]);
    }
    // Number Format
    public static function numberFormat($number)
    {
        if ($number < 9) {
            return '0' . $number;
        }
        return $number;
    }

    // Price Format
    public static function priceFormat($price){
        return config('site_config.currencies.'.config('site_config.constants.currency').'.symbol').number_format($price, 2).config('site_config.currencies.'.config('site_config.constants.currency').'.name');
    }

    // Area Fromat
    public static function areaFormat($area){
        return number_format($area, 2).'sq.ft';
    }
    // PDF FILE
    public static function generatePDF($view, $data)
    {
        $pdf =  PDF::loadView($view, $data);
        if (!file_exists(public_path('uploads/' . 'statements')) && !is_dir(public_path('uploads/' . 'statements'))) {
            mkdir(public_path('uploads/' . 'statements'), 0777);
        }
        $pdf->save(public_path('uploads/statements/deal_' . $data['Deal']->id . '.pdf'));
        $path = 'statements/deal_' . $data['Deal']->id . '.pdf';
        return $path;
    }

    // Mail
    public static function sendMail($to,$MailObject,$from="support.cpcweb@gmail.com")
    {
        $message = "";

        try{
            Mail::to($to)->send($MailObject);
        }catch(\Exception $e){
            Log::error($e);
            $response = trans('messages.mail_error');
            $message = $response;
        }

        return $message;

    }

    // Delete file from directory
    public static function unlinkFile($path){
        try{

            if (file_exists(public_path('media/'.$path))) {
                @unlink(public_path('media/'.$path));
            }
            return true;
        }catch(Exception $e){
            Log::error($e);
            return false;
        }

    }

    // set new Price Format
    public static function setPriceFormat($price){
        if($price > 10000000){
            return number_format(($price/10000000),2).' Crore';
        }
        elseif($price > 100000){
            return number_format(($price/100000),2).' Lac';
        }

        return number_format($price,2);
    }

    // Text uppercase
    public static function textFormat($text){
        return strtoupper($text);
    }

    // shorten a text
    public static function shortenTextLength($text){

        if(strlen($text) > config('site_config.constants.max-text-length-catalog')){
            return substr($text, 0,config('site_config.constants.max-text-length-catalog')).'...';
        }

        return $text;
    }

    public static function saveStaticFile($files,$directory="uploads")
    {
        try {
            $filenames = [];
            if(is_array($files)){
                    foreach($files as $file){
                        if (file_exists(public_path($directory.'/'.random.'_'.$file->getClientOriginalName()))) {
                            @unlink(public_path($directory.'/'.random.'_'.$file->getClientOriginalName()));
                        }

                        $path = public_path($directory.'/');
                        $public_path = asset($directory.'/'.date('y-m-d').'-'.random.'_'.$file->getClientOriginalName());
                        $file->move($path, date('y-m-d').'-'.random.'_'.$file->getClientOriginalName());
                        $filenames[] = $public_path;
                    }
            }else{
                if (file_exists(public_path($directory.'/'.$files->getClientOriginalName()))) {
                    @unlink(public_path($directory.'/'.$files->getClientOriginalName()));
                }

                $path = public_path($directory.'/');
                $public_path = asset($directory.'/'.date('y-m-d').'-'.$files->getClientOriginalName());
                $files->move($path, date('y-m-d').'-'.$files->getClientOriginalName());
                $filenames[] = $public_path;
            }



            return $filenames;
        } catch (\Exception $e) {
            Log::error($e);
            return false;
        }
    }

    public static function encryptString($str){
        try{
            return Crypt::encrypt($str);
        }catch (\Exception $e){
            Log::error($e->getMessage());
            return $str;
        }

    }

    public static function decryptString($str){

        try{

            return Crypt::decrypt($str);
        }catch (DecryptException $e){
            Log::error($e->getMessage());
            return $str;
        }
    }

    public static function formatHeading($str,$sep,$class){
        try{
            $textArr = explode($sep,$str);
            $formatStr = "";
            $count = 1;
            foreach($textArr as $key => $txt){
                if($count %2 == 0 )
                    $formatStr .= '<span class="'.$class.'">'.$txt. '</span>';
                else
                    $formatStr .= $txt;
                $count++;
            }
            return $formatStr;
        }catch(Exception $e){
            Log::error($e->getMessage());
            return $str;
        }
    }


    public static function getDate($date,$format){
        return Carbon::parse($date)->format($format);
    }

    public static function padtoLeft($number,$length=2){
        $paddedNumber = "";
        for($i=strlen($number);$i<$length;$i++){
            $paddedNumber .= '0';
        }
        $paddedNumber .= $number;

        return $paddedNumber;
    }

    public static function getDevice($request){
        return true;
        $device = $request->userAgent();
        $ad = new AgentDetector($device);

        $type = $ad->device();
        $model = $ad->deviceModel();
        $platform = $ad->platform();
        $platform_version = $ad->platformVersion();

        $result = DB::table('devices')
        ->where('user_id',auth()->user()->id)
        ->where('device',$type)
        ->where('model',$model)
        ->where('platform',$platform)
        ->where('platform_version',$platform_version)
        ->first();


        if($result != ""){
            $createdAt = Carbon::parse($result->created_at);
            $now = Carbon::now();
            // Calculate the difference in days
            $diffInDays = $createdAt->diffInDays($now);

            if($diffInDays > 30){
                return false;
            }
            return true;
        }

        return false;

        // $savedDevice = DB::table('devices')->where('user_id',$user->id)->where('device',$type)->where('is_otp_validated',1)->first();
    }

    public static function setDevice($request){

        try{
            $device = $request->userAgent();
            $ad = new AgentDetector($device);

            $type = $ad->device();
            $model = $ad->deviceModel();
            $platform = $ad->platform();
            $platform_version = $ad->platformVersion();

            $result = DB::table('devices')->insert([
                ['user_id'=> auth()->user()->id,'device'=> $type,
                'model'=> $model,'platform'=> $platform,'platform_version'=> $platform_version,'is_otp_validated'=>1,
                'created_at'=>Carbon::now()],
            ]);
            return true;

        }catch(\Exception $e){
            return false;
        }

        // $savedDevice = DB::table('devices')->where('user_id',$user->id)->where('device',$type)->where('is_otp_validated',1)->first();
    }

    public static function updateDevice($request,$column,$value){

        try{
            $device = $request->userAgent();
            $ad = new AgentDetector($device);

            $type = $ad->device();
            $model = $ad->deviceModel();
            $platform = $ad->platform();
            $platform_version = $ad->platformVersion();

            $result = DB::table('devices')->whereColumn([
                ['user_id', '=', auth()->user()->id],
                ['device', '=', $type],
                ['model', '=', $model],
                ['platform', '=', $platform],
                ['platform_version', '=', $platform_version],
                ['is_otp_validated', '=', 1],
            ])->update([$column=>$value]);

            return true;

        }catch(\Exception $e){
            return false;
        }

    }

    public static function getUserIP($request) {
        // Get the client's IP address, considering proxies
        $ip = $request->header('X-Forwarded-For');

        // If X-Forwarded-For header is not present, get the IP from the request object
        if (empty($ip)) {
            $ip = $request->ip();
        } else {
            // X-Forwarded-For can contain a comma-separated list of IPs; get the first one
            $ip = explode(',', $ip)[0];
        }

        return $ip;
    }
    public static function updateGalleryImage($img_id,$model,$img_type,$modelId){
        try{
            $img= Media::where('id',$img_id)->first();
            $media = Media::where('model_id',$modelId)->where('img_type',$img_type)->first();
            if(isset($media) ){
                $$media = Media::where('model_id',$modelId)->where('img_type',$img_type)->update([
                    'image_url' => $img->image_url,
                    'model_id' => $modelId,
                    'model' => $model,
                    'image_name' => $img->image_name,
                    'img_type' => $img_type,
                    'extension' => $img->extension
                ]);
            }else{
                $media = Media::create([
                    'image_url' => $img->image_url,
                    'model_id' => $modelId,
                    'model' => $model,
                    'image_name' => $img->image_name,
                    'img_type' => $img_type,
                    'extension' => $img->extension
                ]);
            }


            return $media;

        } catch (\Exception $e) {
            dd($e->getMessage());
            Log::error($e);
            return false;
        }
    }
}
