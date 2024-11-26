<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //view_category
    public function view_category()
    {
        $categories = Category::all();

        return view('admin.category', compact('categories'));
    }

    //add_category
    public function add_category(Request $request)
    {
        $category = new Category;
        $category->category_name = $request->category;
        $category->save();

        toastr()->timeOut(10000)->closeButton()->addSuccess('Category Added Successfully');

        return redirect()->back();
    }

    //delete_category
    public function delete_category($id)
    {
        $category = Category::find($id);
        $category->delete();

        toastr()->timeOut(10000)->closeButton()->addSuccess('Category Deleted Successfully');

        return redirect()->back();
    }
}
