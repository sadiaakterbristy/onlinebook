<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        // if (auth()->user()->is_Admin == 1) {

        //     return $next($request);
        // }

        // return redirect()->back()->with('error', "Restricted");

        if (Auth::check()) {
            if (Auth::user()->is_Admin == '1') {
                return $next($request);
            } else {
                Auth::logout();
                return redirect()->route('login')->with('error', 'Please login first');
            }
        } else {
            return redirect()->route('login');
        }
    }
}
