<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\BaseModel;
use App\Helpers\Helper;
use App\Traits\Validation;
use App\Mail\ContactUs;
use App\Models\Media;
use App\Models\User;
use Pusher\Pusher;
use DB;
use Carbon\Carbon;

class BaseController extends Controller
{
    //
    // use Validation;
    private $baseModel,$contactForm,$newsletter,$Media;
    private $model;
    private $media;

    public function __construct(BaseModel $baseModel,Media $media){
        $this->baseModel = $baseModel;
        $this->media = $media;

    }

    public function setModel(BaseModel $model){
        $this->model = $model;
    }



    public function setMedia(Media $media){
        $this->Media = $media;
    }
    public function getModel(){
        return $this->model;
    }
    public function setGeneralFilters(Request $request)
    {
        $this->model->setLength($request->has('length') ? $request->length : 10);
        $this->model->setStart($request->has('start') ? $request->start : 1);
        $this->model->setOrderBy($request->has('orderBy') ? $request->orderBy : 'created_at');
        $this->model->setOrder($request->has('order') ? $request->order : 'desc');
    }

    public function sendResponse($result = [], $message = '')
    {
        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message,
            'fields' => [],
        ];

        return response()->json($response, 200);
    }

    public function sendError($error = '', $errorMessages = [], $code = 400, $data = [])
    {
        $response = [
            'success' => false,
            'message' => $error,
            'data' => $data,
            'fields' => (!empty($errorMessages) ? $errorMessages : [])
        ];

        return response()->json($response, $code);
    }
// Subscribe for newsletter
    public function newsletterSubscription(Request $request){
        $request->validate($this->newsletter->getRules());

        $response =$this->newsletter->store($request->except('_token'));
        if($response){
            return $this->sendResponse([],trans('messages.success_msg',['action' => trans('lang.subscribed')]));
        }
        return $this->sendError(trans('messages.error_msg',['action' => trans('lang.subscribing')]));
    }
// Contact us form
    public function saveContactForm(Request $request){

        $request->validate($this->contactForm->getRules());

        $response = $this->contactForm->store($request->except('_token'));

        if($response){
            $data = $this->contactForm->find($response);
            $message = Helper::sendMail(env('MAIL_FROM_ADDRESS'),new Contactus($data));
            if($message ==""){
                return $this->sendResponse([],'Your response has been '.trans('messages.success_msg',['action' => trans('lang.save')]));
            }else{
                return $this->sendResponse([],$message);
            }

        }
        return $this->sendError(trans('messages.error_msg',['action' => trans('lang.saving')]));
    }
// Render Table
    public function render(Request $request){
        try{
            $response = [];
            $this->setGeneralFilters($request);
            $response = $this->model->getRecordDataTable($request);
            return $this->sendResponse($response);
        }catch(\Exception $e){
            dd($e->getMessage());
            Log::error($e);
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }

    }
// destroy
    public function destroy(Request $request,$id){
        try{
            DB::beginTransaction();

            $status=$this->model->destroyByid($id);

            DB::commit();
            return $this->sendResponse([],'Your data has been '.trans('messages.success_msg',['action' => trans('lang.delete')]));
        }catch(Exception $e){
            DB::rollback();
            Log::error($e);
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }
    }
// Store
    public function store(Request $request){

        $rules = $this->model->getRules();

        $request->validate($rules);


        try {
            DB::beginTransaction();
            $data = $request->except(['_token','media','gallery','attachment','image','image1','image2','filename']);
            $result = $this->model->store($data);
            $this->model->id = $result;

            if ($request->has('media')) {
                //$response = Helper::saveMedia($request->image,$this->model->class_name,$result->id);

                foreach($request->media as $media){
                   // dd($this->Media);
                    $this->Media->updateByColumn([
                        'model_id' => $result,
                    ],$media);
                }
            }
            DB::commit();
            // return $result;
            return $this->sendResponse([], trans('messages.success_msg',['action' => trans('lang.saved')]));
        } catch (\Exception $e) {
            // dd($e->getMessage());
            DB::rollback();
            Log::error($e);
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }
    }
// Update
    public function update(Request $request,$id){
        $rules = $this->model->getRules();
        foreach($rules as $key => $rule){
            if(strpos($rule,'unique')){
                $rules[$key] = $rule.','.$key.','.$id;
            }
        }
        // dd($request);

        $request->validate($rules);

        try {
            DB::beginTransaction();
            $data = $request->except(['_token','media','gallery','image','image1','image2']);
            $this->model->updateByColumn($data,$id);
            $this->model->id = $id;
            if ($request->has('media')) {

                foreach($request->media as $media){

                    $this->Media->updateByColumn([
                        'model_id' => $id,
                        'model' => $this->model->class_name,
                    ],$media);

                }
            }
            DB::commit();
            // return $id;
            return $this->sendResponse([], trans('messages.success_msg', ['action' => trans('lang.updated')]));
        } catch (\Exception $e) {
            DB::rollback();
            Log::error($e);
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }
    }
// Get
    public function get(Request $request,$id){
        try{
            $result = $this->model->first('id',$id);
            return $this->sendResponse($result);
        }catch(\Exception $e){
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }

    }
// Save files
    public function saveFiles(Request $request){
        $media = 0;
        $files = $request->file('files');
        if($request->id){
            $id = $request->id;
        }else{
            $id = 0;
        }
        if (isset($request->files)) {
            $media =  Helper::saveMedia($files,$request->model,'main',$request->id);
            return $media->id;
        }
        return true;
    }

    public function deleteFiles(Request $request,$id){
        // dd($request);
        try{
            DB::beginTransaction();
            $response = $this->media->find($id);
            Helper::unlinkFile($response->image_name);
            $this->media->destroyById($id);
            DB::commit();
            return $this->sendResponse([],trans('messages.success_msg',['action' => trans('lang.deleted')]));

        }catch (\Exception $e) {
            DB::rollback();
            Log::error($e);
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }


    }

    public function getAllRoles()
    {
        try{
            $User = new User();
            return $this->sendResponse($User->getRoles());
        }catch(\Exception $e){
            Log::error($e);
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }

    }
}
