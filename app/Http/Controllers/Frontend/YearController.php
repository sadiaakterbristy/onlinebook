<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Http\Request;

class YearController extends Controller
{

    public function year($year)
    {

        $books = Books::where('publishing_year', $year)->get();
        // dd($books);
        return view('user.year.book', compact('books'));
    }
}
