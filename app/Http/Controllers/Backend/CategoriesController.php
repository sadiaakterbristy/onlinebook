<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function admin()
    {
        $category = Category::paginate(4);
        return view('content.categories', compact('category'));
    }





    public function editcategory($id)
    {
        $category = Category::find($id);

        return view('admin.edit.editcategory', compact('category'));
    }

    public function update(Request $request, $id)
    {

        // dd($request->all());
        $category = Category::find($id);

        $category->update([
            'name' => $request->input('name'),


            // 'profile_pic' => $request->input('picture'),
        ]);
        return redirect()->route('admin.categories')->with('success', 'Category updated');
    }


    public function categoryDelete($id)
    {
        //dd($id);
        //first get the product
        $category = Category::find($id);


        //then delete it
        $category->delete();
        return redirect()->back()->with('success', 'A category deleted successfully');
    }






    //User

}
