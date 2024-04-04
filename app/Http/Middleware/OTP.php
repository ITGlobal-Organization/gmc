<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Jenssegers\Agent\Facades\Agent;
use App\Notifications\NewUserNotification;
use DB;
use Auth;
use Carbon\Carbon;
class OTP
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $user = auth()->user();
        $device = Agent::device();
        $device = "Iphone";

        $savedDevice = DB::table('devices')->where('user_id',$user->id)->where('device',$device)->where('is_otp_validated',1)->first();
        if($savedDevice == ""){
                $otp = random_int(100000, 999999);
                DB::table('otp')->updateOrInsert(
                    ['user_id' => $user->id],
                    ['otp' => $otp,'validated_till'=>Carbon::now()->addMinutes(2)]
                 );
                 DB::table('notifications')->where('notifiable_id',$user->id)->delete();
                $user->notify(new NewUserNotification($otp));
                //  try{

                //  }catch(\Exception $e){
                //     dd($e);
                //  }
                // $user->notify(new NewUserNotification($otp));
                DB::table('devices')->insert([
                    'user_id'=>$user->id,
                    'device'=>$device
                ]);
                return redirect()->route('auth.otp');
        }

        return $next($request);
    }
}
