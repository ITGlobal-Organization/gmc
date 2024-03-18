<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Jenssegers\Agent\Facades\Agent;
use DB;
use Illuminate\Support\Facades\Log;
use App\Notifications\NewUserNotification;

class AuthenticatedSessionController extends BaseController
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login.'.config('site_config.auth.login_view'),[
            'title' => trans('lang.login')
        ]);
    }

    public function createAdmin()
    {

        return view('auth.login.adminlogin',[
            'title' => trans('lang.login')
        ]);
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function auth(LoginRequest $request)
    {
        // Auth::logout();
        $request->authenticate();

        $request->session()->regenerate();
        auth()->user()->login_at = Carbon::now();
        auth()->user()->is_login = 1;
        auth()->user()->save();

        $user = auth()->user();

        if(!$user->hasRole('admin')){
            $user[auth()->user()->roles[0]->name] = auth()->user()->{auth()->user()->roles[0]->name};
        }
        $redirect_route = session('redirected_route');
        if(!isset($redirect_route)){
            $redirect_route = route(strtolower(auth()->user()->roles[0]->name).'.dashboard');
        }
        $device = Agent::device();
        $savedDevice = DB::table('devices')->where('user_id',$user->id)->where('device',$device)->first();

        if($savedDevice == ""){
            try{
                $user->notify(new NewUserNotification("You have logged in from a new device"));
                DB::table('devices')->insert([
                    'user_id'=>$user->id,
                    'device'=>$device
                ]);
            }catch(\Exception $e){
                // dd($e->getMessage());
                Log::error($e);
            }

        }

        return $this->sendResponse([
            'token' => auth()->user()->createToken('API Token')->plainTextToken,
            'user' => json_encode($user),
            'route' => $redirect_route,
        ],trans('messages.logged_in'));

    }


    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request,$id=0)
    {
        auth()->user()->logout_at = Carbon::now();
        auth()->user()->is_login = 0;
        auth()->user()->save();
        auth()->user()->tokens()->delete();
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
