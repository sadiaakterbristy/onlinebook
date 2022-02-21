<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    // public function __construct()

    // {
    //     $this->middleware(['auth']);
    // }


    public function index()
    {
        $user = User::where('is_Admin', 0)->count();
        $order = Order::count();
        $category = Category::count();
        $book = Books::count();


        return view('admin.dashboard', compact('user', 'order', 'category', 'book'));
    }


    public function feedback()
    {

        $feedback = Contact::with('userContact')->paginate(4);

        return view('admin.feedback', compact('feedback'));
    }

    public function feedbackDelete($id)
    {
        //dd($id);
        //first get the product
        $feedback = Contact::find($id);


        //then delete it
        $feedback->delete();
        return redirect()->back()->with('success', 'Feedback deleted successfully');
    }
}
