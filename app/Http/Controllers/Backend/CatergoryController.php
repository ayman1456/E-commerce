<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatergoryController extends Controller
{
    function category()
    {
        $categories = Category::Latest()->paginate(8); //all dile shob chole ashe asc order e  Category::all()
        return view('backend.category',compact('categories'));
    }
    function categoryadd(Request $req,$id=null)
    {
        
        
        $category = Category::findOrNew($id);
        $category->title=$req->title;
        $category->title_slug= Str::slug($req->title);
        $category->save();
        return redirect('/dashboard/category');

    }
    function categorydelete($id)
    {
       
        Category::find($id)->delete();
        return back();
    }
    function categoryedit($id)
    {
        $categories = Category::Latest()->paginate(8); //all dile shob chole ashe asc order e  Category::all()   //Category::Latest()->get()
        $foundcategory=Category::find($id);
        return view('backend.category',compact('foundcategory','categories'));
        
    }
}
