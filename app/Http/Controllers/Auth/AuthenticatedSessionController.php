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
use Karmendra\LaravelAgentDetector\AgentDetector;
use App\Helpers\Helper;

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
        $device = $request->userAgent();
        $ad = new AgentDetector($device);

        if($ad->isBot()){
            return false;
        }
        $request->authenticate();

        $request->session()->regenerate();

        auth()->user()->login_at = Carbon::now();
        auth()->user()->is_login = 1;
        auth()->user()->save();
        $user = auth()->user();


        if(!$user->hasRole('admin')){
            $user[auth()->user()->roles[0]->name] = auth()->user()->{auth()->user()->roles[0]->name};
        }
        $redirect_route = session('redirect_route');
        if(!isset($redirect_route) && !$user->hasRole('admin')){
            $redirect_route = route(strtolower(auth()->user()->roles[0]->name).'.dashboard');
        }

        if(isset($redirect_route)){
            $redirect_route = route($redirect_route);
        }



        return $this->sendResponse([
            'token' => auth()->user()->createToken('API Token')->plainTextToken,
            'user' => json_encode($user),
            'route' => $redirect_route,
        ],trans('messages.logged_in'));

    }

    public function verifyOTP(Request $request){
        $user = auth()->user();

        $otp = DB::table('otp')->where('otp',$request->otp)->where('user_id',$user->id)->first();

        if($otp != "" && Carbon::parse($otp->validated_till)->gt(Carbon::now())){

            Helper::setDevice($request);
            // $device = Agent::device();
            // DB::table('devices')->where('device',$device)->where('user_id',$user->id)->update(['is_otp_validated'=>1]);
            DB::table('users')->where('id',$user->id)->update(['is_login'=>1]);
            $redirect_route = route(strtolower(auth()->user()->roles[0]->name).'.dashboard');

            return $this->sendResponse([
                'route' => $redirect_route,
            ],trans('messages.logged_in'));

        }else if($otp != "" && Carbon::parse($otp->validated_till)->lt(Carbon::now())){

            $otp = random_int(100000, 999999);
                DB::table('otp')->updateOrInsert(
                    ['user_id' => $user->id],
                    ['otp' => $otp,'validated_till'=>Carbon::now()->addMinutes(2)]
                 );
                DB::table('notifications')->where('notifiable_id',$user->id)->delete();
                $user->notify(new NewUserNotification($otp));

                return $this->sendResponse([
                    'route' => route('auth.otp'),
                ],'Your OTP has been expired. A new OTP has been sent to your email.');
        }else{
            return $this->sendError('OTP is invalid');
        }

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
    public function getOTP(Request $request){
        // $device = Agent::device();

        // $savedDevice = DB::table('devices')->where('user_id',auth()->user()->id)->where('device',$device)->where('is_otp_validated',1)->first();
        if(Helper::getDevice($request) && auth()->user() != ''){
            return redirect()->route(strtolower(auth()->user()->roles[0]->name).'.dashboard');
        }
        return view('auth.otp');
    }
}
