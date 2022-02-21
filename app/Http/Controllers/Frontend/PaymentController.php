<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index($id)
    {
        // $books = Books::all();
        // $books = Books::with('category')->get();

        // $payment = Order::with(['user', 'book'])->where('user_id', auth()->user()->id)->first();
        // $order = OrderDetail::where('order_id', $payment->id)->first();
        // dd($payment);

        $payment = Order::find($id);
        $orderDetails = OrderDetail::where('order_id', $payment->id)->first();

        // dd($payment);

        return view('user.payment', compact('payment', 'orderDetails'));
    }

    public function payment(Request $request)
    {
        // dd($request->book);
        $this->validate($request, [

            'payment_method' => 'required',
            't_id' => 'required|unique:payments',
            't_phone' => 'required|max:11|min:11',

        ]);

        Payment::create([
            't_id' => $request->input('t_id'),
            't_phone' => $request->input('t_phone'),
            'payment' => $request->input('payment'),
            'user_id' => auth()->user()->id,
            'order_id' => $request->input('order_id'),
            'payment_method' => $request->input('payment_method')

        ]);

        // $status = Cart::where('user_id', auth()->user()->id)->first();
        // $status->update([
        //     'status' => 'order',
        // ]);

        return redirect()->back()->with('success', 'Please wait for the confirmation');
    }
}
