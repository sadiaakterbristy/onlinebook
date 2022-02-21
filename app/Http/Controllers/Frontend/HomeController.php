<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $category = Category::take(3)->get();
        $book = Books::take(3)->get();

        return view('user.index', compact('category', 'book'));
    }
    public function contact()
    {
        $data = Contact::where('user_id', auth()->user()->id)->get();


        return view('user.contact', compact('data'));
    }
    public function submitReview(Request $request)
    {



        Contact::create([

            'user_id' => auth()->user()->id,


            'description' => $request->description,


        ]);

        return redirect()->back()->with('success', 'Thank you for your support');
    }

    public function myOrder()
    {

        $auth = auth()->user()->id;
        $order = OrderDetail::with('order')->whereIn('order_id', function ($query) use ($auth) {
            $query->from('orders')
                ->select('id')
                ->where('user_id', $auth);
        })->get();

        // dd($search);
        return view('user.viewOrderDetail', compact('order'));
    }
    public function cancelOrder($id)
    {

        $cancel = Order::find($id);
        $cancel->delete();
        return redirect()->back();
    }
}
