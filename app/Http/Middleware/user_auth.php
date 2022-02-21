<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class user_auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {



        if (Auth::check()) {
            if (Auth::user()->is_Admin == '0') {
                return $next($request);
            } else {
                Auth::logout();
                return redirect()->route('user.login')->with('error', 'Please login to continue');
            }
        } else {
            return redirect()->route('user.login');
        }
    }
}
