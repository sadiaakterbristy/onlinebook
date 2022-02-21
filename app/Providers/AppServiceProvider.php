<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\Wishlist;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        // $wishCount = Wishlist::where('status', 'pending')->count();
        // view()->share('wishCount', $wishCount);


        $count = 0;
        $cartCount = Cart::all();
        // dd($foodItemCount);
        foreach ($cartCount as $request) {
            $count = $count + $request->quantity;
        }
        // dd( $request->quantity );
        view()->share('cartCount', $count);
        //   $cartCount = Cart::count();
        // view()->share('cartCount', $cartCount);
    }
}
