<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderConfirm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $order;
    public function __construct($order)
    {
        $this->order = $order;
    }





    /**
     * Build the message.
     *
     * @return $this
     */


    public function build()
    {
        return $this->view('admin.email')->with(['orderData' => $this->order]);
    }
}
