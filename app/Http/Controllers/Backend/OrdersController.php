<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\OrderConfirm;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrdersController extends Controller
{
    public function index()
    {

        $orders = Payment::with(['user', 'book'])->paginate(4);

        return view('admin.payment', compact('orders'));
    }

    public function statusUpdate($id)
    {

        $t_info = Payment::find($id);

        $check = Payment::where('pay_status', 'unpaid')->first();


        if ($check) {


            $t_info->update([
                'pay_status' => 'paid',
            ]);
        }



        //send email to user
        Mail::to($t_info->user->email)->send(new OrderConfirm($t_info));

        return redirect()->back()->with('success', 'Payment Confirm');
    }
    public function cancelPayment($id)
    {

        $t_info = Payment::find($id);

        $check = Payment::where('pay_status', 'paid')->first();


        if ($check) {


            $t_info->update([
                'pay_status' => 'unpaid',
            ]);
        }




        return redirect()->back()->with('error', 'Payment Cancel');
    }


    public function orderDetail($id)
    {


        $orderViews = Order::find($id);

        // dd($orderViews);
        $orderList = OrderDetail::where('order_id', $orderViews->id)->get();
        $total = $orderList->sum('sub_total');
        $tax = $total * (5 / 100);
        $grand_total = $total + $tax;
        // $tax = $orderList->sub_total


        //  dd($total);




        return view('admin.orderDetail', compact('orderViews', 'orderList', 'total', 'tax', 'grand_total'));
    }




    public function order()
    {

        $orders = Order::with(['user', 'orderDetail'])->paginate(4);

        return view('content.orders', compact('orders'));
    }

    public function confirmOrder($id)
    {

        $t_info = Order::find($id);

        $check = Order::where('status', 'pending')->first();
        $pay = Order::where('paid_status', 'unpaid')->first();


        if ($check && $pay) {


            $t_info->update([
                'status' => 'confirm',
                'paid_status' => 'paid',
            ]);
        }


        return redirect()->back()->with('success', 'Confirm');
    }
    public function cancelOrder($id)
    {

        $t_info = Order::find($id);

        $check = Order::where('status', 'confirm')->first();
        $pay = Order::where('paid_status', 'paid')->first();


        if ($check && $pay) {


            $t_info->update([
                'status' => 'cancel',
                'paid_status' => 'unpaid',
            ]);
        }




        return redirect()->back()->with('error', 'Order Canccel');
    }
}
