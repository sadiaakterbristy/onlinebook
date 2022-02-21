<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Category;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class UserCategoryController extends Controller
{
    public function index(Request $request)
    {

        $category = Category::all();
        $search = $request->input('search');

        if ($request->has('search')) {
            $category = Category::where('name', 'like', "%{$search}%")->paginate(9);
        } else {
            $category = Category::paginate(9);
        }

        return view('user.categories', compact('category', 'search'));
    }

    // public function categoryBook(Books $category)


    public function categoryBook($id)
    {
        // dd($id);

        // $books = Books::with('category')->find($id)->get();
        // return view('user.category.book', compact('books'));

        // $books = Books::find($id)->get();

        if ($id == 'all') {
            $books = Books::all();
        } else {
            $books = Books::where('categories_id', $id)->get();
        }



        return view('user.category.book', compact('books'));
    }
}
