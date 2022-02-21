<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{

    // public function __construct()

    // {
    //     $this->middleware(['auth']);
    // }
    public function index()
    {


        $users = User::where('is_Admin', '0')->paginate(4);



        return view('admin.users', compact('users'));
    }

    public function userDelete($id)
    {
        // dd($id);
        //first get the product
        $users = User::find($id);


        //then delete it
        $users->delete();
        return redirect()->back()->with('success', 'User delete sussessfully');
    }
}
