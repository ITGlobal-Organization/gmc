<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('passwords.reset',[
            'title' => trans('lang.forget_password')
        ]);
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $messages = [
            'exists' => 'This email does not exist in our record.',
        ];
        // dd($request->email);
        $request->validate([
            'email' => ['required', 'email','exists:users,email'],
        ],$messages);


        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        try {
            // dd("sdf");
            $status = Password::sendResetLink(
                $request->only('email'),
                fn ($user, $token) =>
                    (DB::table('password_resets')
                        ->updateOrInsert(
                            ['email' => $user->email],
                            [
                                // the raw token sent to the user's email as seen in the url
                                'raw_url_token' => $token,
                                // the token that will be saved in the db for validation
                                'token' => Hash::make($token)
                            ]
                        ))
                        ? $user->sendPasswordResetNotification($token)
                        : null
            );


            if($status === Password::RESET_LINK_SENT){
                return response()->json([
                    'status'=>true,
                    'response'=>$status,
                    'message'=>'Password reset link has been sent to your email'
                ]);
            }else{
                return response()->json([
                    'status'=>false,
                    'response'=>$status,
                    'message'=>'Could not send password reset link'
                ]);
            }
            // return $status === Password::RESET_LINK_SENT
            //     ? back()->with(['status' => __($status)])
            //     : back()->withErrors(['email' => __($status)]);
            // dd($status);
        }catch (\Exception $e){
            return response()->json([
                'status'=>false,
                'response'=>$e->getMessage(),
                'message'=>'Could not send password reset link'
            ]);
        }


        return $status == Password::RESET_LINK_SENT
                    ? back()->with('status', __($status))
                    : back()->withInput($request->only('email'))
                            ->withErrors(['email' => __($status)]);
    }

    public function update(Request $request){

        $messages = [
            'exists' => 'This email does not exist in our record.',
            'min' => 'Atleast eight characters are required in password field',
            'confirmed'=>'Password and Confirm Password does not match'
        ];

        $request->validate([
            'email' => ['required', 'email','exists:users,email'],
            'password' => 'required|confirmed|min:8',
        ],$messages);

        $password = Hash::make($request->password);

        User::where('email',$request->email)->update(['password'=>$password]);

        return response()->json([
            'status'=>true,
            'message'=>'Password updated successfully'
        ]);


    }
}
