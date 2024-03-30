<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use com\zoho\api\authenticator\OAuthBuilder;
use com\zoho\api\authenticator\store\DBBuilder;
use com\zoho\crm\api\InitializeBuilder;
use com\zoho\crm\api\dc\USDataCenter;
use com\zoho\api\logger\LogBuilder;
use com\zoho\api\logger\Levels;
use com\zoho\crm\api\SDKConfigBuilder;
use com\zoho\crm\api\ProxyBuilder;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use App\Models\User;
use App\Models\Directory;
use DB;
use Log;
use Illuminate\Support\Facades\Hash;
use Auth;
// use GuzzleHttp\Client;
// use App\Helpers\OAuthToken;

class ZohoController extends BaseController
{

    private $user,$Media,$authUser;
    private  $zohoAuthToken = '1000.1baf1559dd09adcc65ebcc2ffff02fc0.675dec9e4a1a83b5501847c2640590e6';
    private $refreshToken = '1000.dbf2e2f5d89607e359667ad4db6c0afe.14af10121266ce8d2ab7436d1fc283e1';
    private $leadData,$directoryId,$requestData,$userData;


    public function __construct(User $user,Directory $directory){
        $this->user = $user;
        $this->directory = $directory;
        $this->user->setRules();
        $this->directory->setRules();
        $this->setModel( $this->directory);
        $this->client = new \GuzzleHttp\Client();
        $this->authUser;
        $this->directoryId;
        $this->requestData;

    }

    public function register(Request $request){
        $this->zohoAuthToken = DB::table('tokens')->where('id', '=', 1)->pluck('access_token')[0];
        $request->validate($this->user->getRules());
        $request->validate($this->directory->getRules());
        if(!isset($request->category_ids)){
            return $this->sendError('categories are required',['category_ids'=>'Categories are required']);
        }
        $website = $request->web_url;
        $request->merge(['website'=>$website]);
        $userData = $request->except(['_token','password_confirmation','title','category_ids','web_url']);
        $userData['password'] = Hash::make($request->password);
        $user = $this->user->store($userData);
       
        $this->authUser = $this->user->where('id',$user)->firstOrFail();
        // Adding Stripe Customer
        // $this->authUser->addStripeCustomer();
        
        $this->authUser->assignRole("6");
        if($user == "" || $user == 0){
            return $this->sendError('User did not created');
        }

        $request->merge(["user_id"=>$user,"mobile_no"=>$request->tel_no]);
        $directoryData = $request->except(['_token','password_confirmation','password','company','category_ids','postalcode','tel_no','website']);
        $directory = $this->directory->store($directoryData);
        $this->directoryId = $directory;

        foreach($request->category_ids as $Category){
            $this->directory->addRelTableRecord($Category,'category_directory','category_id');
        }
        $this->requestData = $request;


        $response = $this->registerLead($this->requestData);
        if(isset($response['status']) && $response['status'] != true){
            $this->user->where('id',$this->authUser->id)->delete();
        }else{
            $response = $this->registerUser($request);
            if($response['status'] != true){
                $this->user->where('id',$this->authUser->id)->delete();
            }
        }
        return response()->json($response);

    }
    public function registerLead($request){

            $this->leadData = [
                'data' => [
                [
                    // "Lead_Source"=> "PCC FLONIX",
                    'Company' => $request->title,
                    'Last_Name' =>$request->last_name,
                    'First_Name' => $request->first_name,
                    'Email' => $request->email,
                    'Website' => $request->web_url,
                    'Phone' => $request->tel_no,
                    'Facebook_page_n_a_if_none' => $request->facebook_url,
                    'Instagram_page_n_a_if_none' => $request->instagram_url,
                    'Linked_In_page_n_a_if_none' => $request->linkedin_url,
                    'Mobile'=>$request->phone,
                    'Address'=>$request->address,
                    'State'=>'Texas'
                ]
            ]
        ];
        $response = $this->leadApi($this->leadData);

        $response = json_decode($response->getBody(),true);

        return  $this->checkResponse($response,"directory");

    }

    public function checkResponse($response,$table){
        if (isset($response['data'][0]['code']) && $response['data'][0]['code'] == "SUCCESS"){
            $id = $response['data'][0]['details']['id'];
            $this->updateZohoId($id,$table);
            $response = $this->Response(true,$id,'',$response);
            return $response;

        }else if ($response['code'] && ($response['code'] == "AUTHENTICATION_FAILURE" || $response['code'] == "INVALID_TOKEN")){
            $response = $this->updateToken();

            if($response == true){
                if($table == "directory"){
                    $response = $this->leadApi($this->leadData);
                }else{
                    $response = $this->userApi($this->userData);
                }
                $response = json_decode($response->getBody(),true);
                $id = $response['data'][0]['details']['id'];
                $this->updateZohoId($id,$table);
                $response = $this->Response(true,$id,'',$response);
                return $response;
            }
            return false;

        }else{
            return false;
        }
    }


    public function registerUser($request){

        $this->userData = [
            'data' => [
            [
                'First_name' => $request->first_name,
                'Last_Name' => $request->first_name,
                'Email' => $request->email,
                'Address' => $request->address,
                'Phone' => $request->tel_no,
            ]
            ]
        ];
       $response = $this->userApi($this->userData);
        // $response= $this->userApi($this->userData);

        $response = json_decode($response->getBody(),true);

    return $this->checkResponse($response,"user");
}

    public function updateToken(){

        $response= Http::asForm()
                ->post('https://accounts.zoho.eu/oauth/v2/token', [
                    'client_id'=>env('ZOHO_CLIENT_ID'),
                    'client_secret'=>env('ZOHO_CLIENT_SECRET'),
                    'refresh_token'=>$this->refreshToken,
                    'grant_type'=>'refresh_token',
                    'redirect_uri'=>'http://gmc.test'
                ]);
        $response = json_decode($response->getBody(),true);
        if(isset($response['access_token'])){
            $this->zohoAuthToken = $response['access_token'];
            DB::table('tokens')->where('id', '=', 1)->update(['access_token'=>$this->zohoAuthToken]);
            return true;
        }
        return false;
    }

    public function Response($status,$id='',$error='',$response){

        $responseArr = [
            'status'=>$status,
            'id'=>$id,
            'error'=>$error,
            'message'=>$response
        ];

        return $responseArr;

    }
    public function updateZohoId($id,$table){
        if($table == "directory"){
            $this->directory->where('id',$this->directoryId)->update(['zoho_id'=>$id,'is_approved'=>0]);
        }else if($table == "user"){
            $this->user->where('id',$this->authUser->id)->update(['zoho_id'=>$id]);
            Auth::login($this->authUser);
        }
        return ;
    }
    public function leadApi($leadData){
        $response = Http::withBody(json_encode($this->leadData), 'application/json')
        ->withHeaders([
            'Authorization' => 'Zoho-oauthtoken '.$this->zohoAuthToken,
            'Scope'=>'ZohoCRM.modules.ALL'
        ])
        ->post('https://www.zohoapis.eu/crm/v2/Leads');
        return $response;
    }
    public function userApi($userData){
        $response = Http::withBody(json_encode($this->userData), 'application/json')
        ->withHeaders([
            'Authorization' => 'Zoho-oauthtoken '.$this->zohoAuthToken,
            'Scope'=>'ZohoCRM.modules.ALL'
        ])
        ->post('https://www.zohoapis.eu/crm/v2/Contacts');
        return $response;
    }
}

