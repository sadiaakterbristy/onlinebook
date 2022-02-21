<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class UserBookController extends Controller
{
    public function index(Request $request)
    {
        // $books = Books::all();
        $books = Books::with('category')->get();

        $search = $request->input('search');

        if ($request->has('search')) {
            $books = Books::where('name', 'like', "%{$search}%")->paginate(9);
        } else {
            $books = Books::paginate(9);
        }

        return view('user.book', compact('books', 'search'));
    }
    public function viewBook($id)
    {
        // $books = Books::all();
        // $books = Books::with('category')->get();


        if ($id == 'all') {
            $books = Books::all();
        } else {
            $books = Books::where('id', $id)->first();
        }

        return view('user.viewBook', compact('books'));
    }

    public function orderBook($id)
    {
        // dd($id);
        // $books = Books::all();
        $order = Cart::where('user_id', auth()->user()->id)->get();
        // $cart = Cart::where('user_id', auth()->user()->id)->get();
        // $user = User::find($id);
        $sub_total = 0;

        foreach ($order as $data) {
            $sub_total += $data->cartBook->price * $data->quantity;
        }
        $tax = $sub_total * (5 / 100);
        $total = $sub_total + $tax;


        if ($id == 'all') {
            $cart = Cart::all();
        } else {
            $cart = Cart::where('user_id', $id)->get();
        }

        return view('user.order', compact('order', 'cart', 'total'));
    }




    public function orderConfirm(Request $request)
    {
        $this->validate($request, [

            'address' => 'required',
            'phone' => 'required|max:11|min:11',

        ]);

        $orderData = [
            'user_id' => auth()->user()->id,

        ];

        //    dd($orderData);


        $carts = Cart::where('user_id', auth()->user()->id)->get();

        DB::beginTransaction();
        try {

            // $order = Order::create($orderData);
            $orderD = [

                'user_id' => auth()->user()->id,
                'booking_date' => $request->date,

                'address' => $request->address,
                'phone' => $request->phone,
            ];
            $order =    Order::create($orderD);


            foreach ($carts as $cart) {

                OrderDetail::create([
                    'order_id' => $order->id,
                    'book_id' => $cart->book_id,
                    'quantity' => $cart->quantity,
                    'sub_total' => $request->price,

                ]);
            }

            $carts->each(function ($item) {
                $item->delete();
            });
            DB::commit();
        } catch (Throwable $e) {
            DB::rollback();
        }
        return redirect()->route('payment', $order->id);
    }
}
