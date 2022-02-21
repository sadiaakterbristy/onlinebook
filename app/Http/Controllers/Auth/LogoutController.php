<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function store()
    {
        // dd('logout');


        $item_cart = Cart::where('user_id', auth()->user()->id)->get();
        foreach ($item_cart as $data) {
            $data->delete();
        }

        Auth::logout();



        return redirect()->route('home');
    }

    public function adminLogout()
    {

        Auth::logout();
        return redirect()->route('login');
    }
}
