<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()

    {
        $this->middleware(['user_auth']);
    }


    public function index()
    {


        $carts = Cart::where('user_id', auth()->user()->id)->get();
        $cartQuantity = $carts->sum('quantity');
        $sub_total = 0;

        foreach ($carts as $cart) {
            $sub_total += $cart->cartBook->price * $cart->quantity;
        }

        $tax = $sub_total * (5 / 100);
        $grandtotal = $sub_total + $tax;


        return view('user.cart', compact('carts', 'sub_total', 'tax', 'grandtotal'));
    }

    public function addToCart($id)
    {

        $books = Books::find($id);

        $user_id = auth()->user()->id;

        $checkAlreadyExistItem = Cart::where('book_id', $id)->where('user_id', $user_id)->first();


        if (!$checkAlreadyExistItem) {
            $cartData = [
                'book_id' => $books->id,
                'quantity' => 1,
                'user_id' => auth()->user()->id,
            ];
            Cart::create($cartData);
        } else {

            $oldQuantity = $checkAlreadyExistItem->quantity;

            $checkAlreadyExistItem->update([
                'quantity' => $oldQuantity + 1
            ]);
        }
        // session()->flash('success', 'Add to Cart successful');

        return redirect()->back()->with('success', 'Add to cart Successful');
    }

    // public function sorryMsg()
    // {

    //     return view('frontend.content.sorryMsg');
    // }
    //


    public function updateCart(Request $request, $id)
    {

        $carts = Cart::find($id);
        $carts->update([
            'quantity' => $request->quantity
        ]);
        return redirect()->back();
    }

    public function bookRemove($id)
    {
        // dd($id);
        //first get the product
        $bookRemove = Cart::find($id);


        //then delete it
        $bookRemove->delete();
        // if (!is_null($id)) {
        //     //then delete it
        //     $bookRemove->delete();
        // }

        return redirect()->back();
    }
}
