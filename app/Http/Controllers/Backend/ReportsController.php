<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    // public function __construct()

    // {
    //     $this->middleware(['is_Admin']);
    // }
    public function index()
    {



        $report = Order::with(['user'])->paginate(4);
        // $order = OrderDetail::where('order_id', $report->id)->get();
        // dd($appointments);



        if (isset($_GET['from_date'])) {
            $fromDate = date('Y-m-d', strtotime($_GET['from_date']));
            $toDate = date('Y-m-d', strtotime($_GET['to_date']));

            // dd($toDate);

            $report = Order::with(['user'])->whereBetween('booking_date', [$fromDate, $toDate])->paginate(4);
        }


        return view('admin.reports', compact('report'));
    }
}
