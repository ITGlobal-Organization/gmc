<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\BaseController;
use App\Models\User;
use App\Models\BaseModel;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use App\Helpers\Helper;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Validation\ValidationException;
use App\Mail\OtpMail;
use App\Models\Member;
use App\Models\Invite;



class RegisteredUserController extends BaseController
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    private $user,$member,$invite;

    public function __construct(User $user,Member $member,Invite $invite){
        $this->user = $user;
        $this->member = $member;
        $this->invite = $invite;
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
 
    public function store(Request $request)
    {
        // auth()->logout();

        try {
            // Validate the incoming request data
            $request->validate([
                'name' => ['required',config('constant.form_attributes.name.min'),config('constant.form_attributes.name.max')],
                'email' => ['required','unique:users,email','email'],
                'phone' => ['required','string',config('constant.form_attributes.phone.min'),config('constant.form_attributes.phone.max')],
                'age' => ['required','integer'],
                'dob'  => ['required','date'],
               ]);

            // Your controller logic goes here if validation passes
        } catch (ValidationException $e) {
            // Return a JSON response with validation errors
            return $this->sendError('',$e->errors(),422,[]);
        }
       
        try {
           

            DB::beginTransaction();
            $data = $request->input();
            
            // store user
            $data['is_active'] = 0;
            $user = User::create($data);
                       
            $response = $this->sendOtp($request);
            DB::commit();
            $user->assignRole('2');
            DB::commit();

            
            
            if($response == ""){
                if(isset($request->ref_token) && isset($request->user_id)){
                    $this->member->store([
                        'user_id' => $request->user_id,
                        'member_id' => $user->id
                    ]);
                }
                return $this->sendResponse([], trans('messages.otp_sent'));
            }
                
            else
                return $this->sendError('Error while processing request');

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return $this->sendError('Error while inserting (' . $e->getMessage() . ')');
        }
    }


    public function validateOtp(Request $request){

        try {
            // Validate the incoming request data
            $request->validate([
                
                'email' => ['required','email'],
                'otp'  => ['required','string','max:4','min:4'],
               ]);

            // Your controller logic goes here if validation passes
        } catch (ValidationException $e) {
            // Return a JSON response with validation errors
            return $this->sendError('',$e->errors(),422,[]);
        }

        try{
            
            $otp = $request->otp;
           
            $Otp = DB::table('otps')->select('otp')->where('otps.email','=',$request->email)
            ->where('otps.expires_at','<=',Carbon::now())
            ->where('otps.is_expired',0)->orderBy('otps.id','desc');

            $OtpFound = $Otp->first();
        
            // dd($OtpFound);
            if(isset($OtpFound)){
                if(Crypt::decryptString($OtpFound->otp) == $otp){
                    $Otp->update([
                        'is_expired' => 1,
                        'expires_at' => Carbon::now()
                    ]);
                    return $this->sendResponse([],trans('messages.otp_vlidated'));
                }
                return $this->sendError(trans('messages.invalid_otp'));
            
            }else{
                return $this->sendError(trans('messages.invalid_otp'));
            }

        }catch(\Exception $e){
            return $this->sendError(trans('messages.error_msg',['action' => 'validation'])); 
        }
        
    }

    public function sendOtp(Request $request){

        try{
            $Otp = $this->generateRandomInteger();
            
            DB::table('otps')->insert([
                'otp' => Crypt::encryptString($Otp),
                'is_expired' => 0,
                'expires_at' => Carbon::now()->addMinute(),
                'email' => $request->email,
                'created_at' => Carbon::now()
            ]);
            $mail = Helper::sendMail($request->email,new OtpMail( [
                'email' => $request->email,
                'otp' => $Otp
            ]),config('mail.from.MAIL_FROM_ADDRESS'));

            return $mail;

        }catch(Exception $e){
            Log::error($e->getMessage());
            return false;
        }
    }

    public function generateRandomInteger($length = 4) {
        $min = pow(10, $length - 1);
        $max = pow(10, $length) - 1;
        
        return random_int($min, $max);
    }

    public function generatePinOrPassword(Request $request){
        try {
            // Validate the incoming request data
            $request->validate([
                
                'email' => ['required','email','exists:users,email'],
                'pin'  => ['required','string','max:5','min:4'],
               ]);

            // Your controller logic goes here if validation passes
        } catch (ValidationException $e) {
            // Return a JSON response with validation errors
            return $this->sendError('',$e->errors(),422,[]);
        }

        try {
           
            DB::beginTransaction();
 
            $user = User::where('email',$request->email)->where('is_active',0)->first();
            
            if(isset($user)){
                // $User = User::find($user->id);
                $user->update([
                    'password' => Hash::make($request->pin),
                    'is_active' => 1,
                    'signin_at' => Carbon::now(),
                ]);
                DB::commit();
                Auth::login($user);
                 return $this->sendResponse([
                        'token' => auth()->user()->createToken('API Token')->plainTextToken,
                        'user' => json_encode($user),
                    ], trans('messages.pin_generated_successfully'));
                
            }

            return $this->sendError('messages.user_not_found');

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return $this->sendError('Error while inserting (' . $e->getMessage() . ')');
        }

    }

}
