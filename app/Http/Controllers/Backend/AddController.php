<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function addCategory()
    {
        return view('content.addcategory');
    }

    public function storeCategory(Request $request)
    {

        $this->validate($request, [


            'name' => 'required '
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

        Category::create([
            'file' => $file_name,
            'name' => $request->name,

        ]);


        return redirect()->route('admin.categories')->with('success', 'A category added successfully');
    }
}
