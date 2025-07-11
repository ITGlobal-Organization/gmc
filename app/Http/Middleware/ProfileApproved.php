<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Directory;

class ProfileApproved
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
        $directory = \DB::table('directories')->where('user_id',auth()->user()->id)->first();
        if($directory->is_approved == 0 || auth()->user()->is_approved == 0){
            return abort(403);
        }


        return $next($request);
    }
}
