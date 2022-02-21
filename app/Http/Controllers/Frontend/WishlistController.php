<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Cart;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class WishlistController extends Controller
{
    public function __construct()

    {
        $this->middleware(['user_auth']);
    }
    public function index()
    {


        $wishData = Wishlist::where('user_id', auth()->user()->id)->get();
        // $cartQuantity = $wishData->sum('quantity');
        // $sub_total = 0;

        // foreach ($wishData as $wish) {
        //     $sub_total += $wish->cartBook->price * $wish->quantity;
        // }

        // $tax = $sub_total * (5 / 100);
        // $grandtotal = $sub_total + $tax;


        return view('user.wishlist', compact('wishData'));
    }

    public function addToWishlist($id)
    {

        $books = Books::find($id);

        $user_id = auth()->user()->id;

        $checkAlreadyExistItem = Wishlist::where('book_id', $id)->where('user_id', $user_id)->first();


        if (!$checkAlreadyExistItem) {
            $wishData = [
                'book_id' => $books->id,

                'user_id' => auth()->user()->id,
            ];
            Wishlist::create($wishData);
        } else {

            return redirect()->back()->with('error', 'This item has already added');
        }
        // session()->flash('success', 'Add to Cart successful');

        return redirect()->back()->with('success', 'Add to wishlist Successful');
    }

    // public function sorryMsg()
    // {

    //     return view('frontend.content.sorryMsg');
    // }
    //


    public function updateWish(Request $request, $id)
    {

        $wishData = Wishlist::find($id);
        $wishData->update([
            'quantity' => $request->quantity
        ]);
        return redirect()->back();
    }

    public function bookRemove($id)
    {
        // dd($id);
        //first get the product
        $bookRemove = Wishlist::find($id);


        //then delete it
        $bookRemove->delete();
        // if (!is_null($id)) {
        //     //then delete it
        //     $bookRemove->delete();
        // }

        return redirect()->back();
    }
}
