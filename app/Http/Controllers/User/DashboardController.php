<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Helpers\Helper;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function __construct(User $user ) {
        $this->user = $user;
    }

    public function dashboard(Request $request){
        // Auth::logout();
        $this->user = Auth::user();
        // dd(User::with('image')->get());
        $user = $this->user->where('id',$this->user->id)->with('image')->first();

        // $Customer = $this->customer->first('user_id',$this->user->id,'=',[],[
        //     ['users','users.id','=','customers.user_id']
        // ]);
        return view($this->user->roles[0]->name.'.dashboard',[
            'title' => trans('lang.user').'|'.trans('lang.dashboard'),
            'user' => $user
        ]);
    }
    public function edit(Request $request){
        $user = Auth::user();
        if(isset($user)){
            $user = $this->user->where('id',$user->id)->with('image')->first();
            return view('user.profile.edit',['User'=>$user]);
        }
        return false;

    }


    // public function getRules(){
    //     return $this->rules=config('rules.users.edit');;
    // }

    public function update(Request $request,$id){
        dd($request);
        try{

            $rules = config('rules.users.edit');

            foreach($rules as $key => $rule){
                if(strpos($rule,'unique')){
                    $rules[$key] = $rule.','.$key.','.$id;
                }
            }
            $result = $request->validate($rules);

            if($request->hasFile('image')){
                $media =  Helper::saveMedia($request->image,"App\Models\User",'main',$id);
            }

            if (!empty($request['password'])) {
                $request['password'] = Hash::make($request['password']);
            }
            else {
                unset($request['password']);
            }
            $result = $this->user->whereId($id)->update($request->except(['image','filename','password_confirmation']));
            $response = [
                'success' => true,
                'data'=>[
                    'route'=>route('user.dashboard')
                ],
                'message'=>'Updated Successfully'
            ];

            return response()->json($response, 200);

        }catch(Exception $e){
            return $this->sendError(trans('messages.error_msg',['action' => trans('lang.saving')]));
        }
    }



}
