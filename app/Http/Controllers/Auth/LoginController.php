<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct()

    {
        $this->middleware(['guest']);
    }

    public function index()
    {

        return view('auth.login');
    }
    public function userLogin()
    {

        return view('auth.userlogin');
    }

    public function store(Request $request)
    {
        $this->validate($request, [

            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($request->only('email', 'password'), $request->remember)) {




            // return back()->with('status', 'Invalid login details');

            if (auth()->user()->is_Admin == 1) {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('home');
            }
        }

        session()->flash('success', 'Invalid!! ');

        return back()->with('status', 'Invalid login details');
    }
}
