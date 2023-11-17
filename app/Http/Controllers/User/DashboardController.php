<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;


class DashboardController extends Controller
{
    public function __construct(User $user ) {
        $this->user = $user;
    }

    public function dashboard(Request $request){
        // Auth::logout();
        $this->user = Auth::user();

        // $Customer = $this->customer->first('user_id',$this->user->id,'=',[],[
        //     ['users','users.id','=','customers.user_id']
        // ]);
        return view($this->user->roles[0]->name.'.dashboard',[
            'title' => trans('lang.user').'|'.trans('lang.dashboard')
        ]);
    }

}
