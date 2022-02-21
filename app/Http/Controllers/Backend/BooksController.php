<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function index()
    {

        $books = Books::with('category')->paginate(4);

        return view('content.books', compact('books'));

        // return view('content.books', [
        //     'books' => $books
        // ]);
    }

    public function addbook()
    {
        $add = Category::all();

        return view('admin.addbook', compact('add'));
    }
    public function store(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [
            'name' => 'required|max:255',
            'author' => 'required|max:255',

        ]);

        $file_name = '';
        // step:1 check req has file

        if ($request->hasFile('picture')) {
            // file is valid?

            $file = $request->file('picture');
            if ($file->isvalid()); {
                // generate unique file name

                $file_name = date('Ymdhms') . '.' . $file->getClientOriginalExtension();

                // store image local directory

                $file->storeAs('photo', $file_name);
            }
        }




        $books =   Books::create([
            'file' => $file_name,
            'name' => $request->name,
            'author' => $request->author,
            'publishing_year' => $request->publishing_year,
            'price' => $request->price,
            'title' => $request->title,
            'stock' => $request->stock,
            'description' => $request->description,
            'categories_id' => $request->category_id,

        ]);

        // $books->categories()->create([
        //     'category' => $request->name,

        // ]);


        return redirect()->route('books')->with('success', 'A book added successfully');
    }

    public function bookDelete($id)
    {
        // dd($id);
        //first get the product
        $books = Books::find($id);

        if (!is_null($id)) {
            //then delete it
            $books->delete();
        }


        return redirect()->back()->with('success', 'Book deleted successfully');
    }



    public function editBook($id)
    {

        $books = Books::find($id);

        return view('admin.edit.editbook', compact('books'));
    }

    public function update(Request $request, $id)
    {

        // dd($request->all());
        $books = Books::find($id);

        $books->update([
            'name' => $request->input('name'),
            'author' => $request->input('author'),
            'publishing_year' => $request->input('publishing_year'),
            'price' => $request->input('price'),
            'title' => $request->input('title'),
            'stock' => $request->input('stock'),
            'description' => $request->input('description'),


        ]);
        $books->save();

        return redirect()->route('books')->with('success', 'Book updated successfully');
    }
}
