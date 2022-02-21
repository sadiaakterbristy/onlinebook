<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Backend\AddController;
use App\Http\Controllers\Frontend\AuthorsController;
use App\Http\Controllers\Backend\BooksController;
use App\Http\Controllers\Backend\CategoriesController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\OrdersController;
use App\Http\Controllers\Backend\ReportsController;
use App\Http\Controllers\Backend\ShopController;
use App\Http\Controllers\Backend\UsersController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\YearController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PaymentController;
use App\Http\Controllers\Frontend\UserBookController;
use App\Http\Controllers\Frontend\UserCategoryController;
use App\Http\Controllers\Frontend\WishlistController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/









//Auth

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'userLogin'])->name('user.login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/', [LogoutController::class, 'store'])->name('logout');


Route::get('admin/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/login', [LoginController::class, 'store']);
Route::post('/admin', [LogoutController::class, 'adminLogout'])->name('admin.logout');



//Admin
Route::group(['middleware' => 'is_Admin'], function () {
    Route::prefix('admin')->group(function () {



        // Route::get('/login', [LoginController::class, 'index'])->name('login');
        // Route::post('/login', [LoginController::class, 'store']);

        // Route::get('/', [AdminController::class, 'index'])->name('admin')->middleware('is_Admin');



        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        //Payment
        Route::get('/payment', [OrdersController::class, 'index'])->name('admin.payment');
        Route::get('/orders/payment/{id}', [OrdersController::class, 'statusUpdate'])->name('orders.payment');
        Route::get('/orders/payment/cancel/{id}', [OrdersController::class, 'cancelPayment'])->name('orders.payment.cancel');
        Route::get('/orders/detail/{id}', [OrdersController::class, 'orderDetail'])->name('order.detail');

        //Order
        Route::get('/order', [OrdersController::class, 'order'])->name('orders');
        Route::get('/orders/{id}', [OrdersController::class, 'confirmOrder'])->name('orders.confirm');
        Route::get('/orders/cancel/{id}', [OrdersController::class, 'cancelOrder'])->name('orders.cancel');


        Route::get('/users', [UsersController::class, 'index'])->name('users');
        Route::get('/users/{id}', [UsersController::class, 'userDelete'])->name('users.delete');




        //Book
        Route::get('/books', [BooksController::class, 'index'])->name('books');
        Route::get('/books/delete/{id}', [BooksController::class, 'bookDelete'])->name('book.delete');
        Route::get('/books/edit/{id}', [BooksController::class, 'editBook'])->name('editbook');
        Route::post('/books/update/{id}', [BooksController::class, 'update'])->name('update.book');
        Route::get('/addbooks', [BooksController::class, 'addbook'])->name('addbooks');
        Route::post('/addbooks', [BooksController::class, 'store'])->name('admin.addbooks');


        //Category
        Route::get('/categories', [CategoriesController::class, 'admin'])->name('admin.categories');
        Route::get('/categories/edit/{id}', [CategoriesController::class, 'editCategory'])->name('edit.categories');
        Route::post('/categories/update/{id}', [CategoriesController::class, 'update'])->name('update.categories');
        Route::get('/categories/delete/{id}', [CategoriesController::class, 'categoryDelete'])->name('category.delete');





        Route::get('/addcategories', [AddController::class, 'addCategory'])->name('admin.addcategory');
        Route::post('/addcategories', [AddController::class, 'storeCategory']);

        //Report

        Route::get('/reports', [ReportsController::class, 'index'])->name('reports');


        //Feedback
        Route::get('/feedback', [DashboardController::class, 'feedback'])->name('feedback');
        Route::get('/feedback/delete/{id}', [DashboardController::class, 'feedbackDelete'])->name('feedback.delete');
    });
});





//User


//Category
Route::get('/categories', [UserCategoryController::class, 'index'])->name('user.categories');
Route::get('/categories/book-{id}', [UserCategoryController::class, 'categoryBook'])->name('user.categories.book');




Route::get('/year/book/{year}', [YearController::class, 'year'])->name('user.year.book');





Route::get('/authors', [AuthorsController::class, 'index'])->name('user.authors');
Route::get('/shop', [ShopController::class, 'index'])->name('user.shop');
Route::get('/', [HomeController::class, 'index'])->name('home');


//Book

Route::get('/book', [UserBookController::class, 'index'])->name('user.book');
Route::get('/book/view/{id}', [UserBookController::class, 'viewBook'])->name('view.book');



//Order
Route::get('/order/{id}', [UserBookController::class, 'orderBook'])->name('user.order');
Route::post('/book/order', [UserBookController::class, 'orderConfirm'])->name('user.order.submit');

Route::get('/myorder', [HomeController::class, 'myOrder'])->name('myOrder');
Route::get('/myorder/cancel/{id}', [HomeController::class, 'cancelOrder'])->name('myOrder.cancel');



//Conact

Route::get('/contact', [HomeController::class, 'contact'])->name('contact')->middleware('user_auth');
Route::post('/review/submit', [HomeController::class, 'submitReview'])->name('review.submit');


//Cart

//  Route::get('/cart/{id}', [CartController::class, 'index'])->name('cart');
Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('addToCart');
Route::get('carts', [CartController::class, 'index'])->name('carts');
Route::post('carts/update/{id}', [CartController::class, 'updateCart'])->name('carts.update');
Route::get('carts/remove/{id}', [CartController::class, 'bookRemove'])->name('carts.remove');


// WIshLIST

Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
Route::get('/add-to-wishlist/{id}', [WishlistController::class, 'addToWishlist'])->name('addToWishlist');
Route::get('wishlist/remove/{id}', [WishlistController::class, 'bookRemove'])->name('wishlist.remove');
Route::get('/addToCart/{id}', [CartController::class, 'addToCart'])->name('wishlist.addToCart');



//Payment

Route::get('/payment/{id}', [PaymentController::class, 'index'])->name('payment');
Route::post('/payment/create/get', [PaymentController::class, 'payment'])->name('create.payment');
