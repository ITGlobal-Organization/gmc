<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\Member;
use App\Models\Invite;
use App\Models\Media;
use DB;
use Log;
use Carbon\Carbon;
use App\Helpers\Helper;
use Illuminate\Support\Str;
use App\Mail\GenericEmail;
use Illuminate\Validation\ValidationException;
use Auth;

class MemberController extends BaseController
{
    //
    private $member,$media,$invite;
    public function __construct(Member $member,Media $media,Invite $invite) {
        $this->member = $member;
        $this->invite = $invite;
        $this->setModel($this->member);
        $this->setMedia($media);
    }


    public function invite(Request $request) {

        $this->member->setRules(config('rules.member.invite'),true);
        try {
            // Validate the incoming request data
            $request->validate($this->member->getRules());

            // Your controller logic goes here if validation passes
        } catch (ValidationException $e) {
            // Return a JSON response with validation errors
            return $this->sendError('',$e->errors(),422,[]);
        }
        
        try{
            DB::beginTransaction();
            $token =Str::random(40);
            $this->invite->store([
                'email' => $request->email,
                'ref_token' => $token,
                'user_id' => Auth::user()->id,
                'expire_at' => Carbon::now()->addDay(),
                'is_expired' => 0
            ]);
            DB::commit();
            $mail = Helper::sendMail($request->email,new GenericEmail( [
                'token' => $token,
            ],'emails.invite'),config('mail.from.MAIL_FROM_ADDRESS'));

            if($mail == ""){
                return $this->sendResponse([
                    'token' => $token,
                ],trans('messages.invite_sent'));
            }else{
                return $this->sendError($mail);
            }
        
        }catch(Exception $e){
            DB::rollback();
            Log::error($e);
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }
    }

    public function getInvite(Request $request){
        try{

           if(isset($request->token)){

                $token = $this->invite->where('ref_token',$request->token)->where('is_expired',0);

                $ExitsToken = $token->first();
                if(isset($ExitsToken)){
                    $this->invite->updateByColumn([
                        'is_expired' => 1
                    ],$ExitsToken->id);
                    return $this->sendResponse([
                        'token' => $ExitsToken->ref_token,
                        'user_id' => $ExitsToken->user_id,
                        'email' => $ExitsToken->email
                    ],trans('messages.invite_sent'));
                }
                
           }
           return $this->sendError(trans('messages.token_not_found'));

        }catch(Exception $e){
            Log::error($e);
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }
    }
}
