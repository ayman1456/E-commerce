<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\MediaUploader;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Helpers\SlugGenerator;
use App\Http\Controllers\Controller;

class CatergoryController extends Controller
{

    use SlugGenerator;
    use MediaUploader;


    function category()
    {
        $categories = Category::with('subcategories')->Latest()->paginate(8); //all dile shob chole ashe asc order e  Category::all()   //Category::Latest()->get()
        $parentcategories = Category::where('category_id',null)->with('subcategories')->Latest()->paginate(8);
        return view('backend.category',compact('categories','parentcategories'));
    }
    function categoryadd(Request $req,$id=null,$iconpath=null)
    {
        $req->validate([
            'cat_icon' => "mimes:png,jpg"
        ]);
        
    
       $slug= $this->createSlug(Category::class,$req->title);
       $iconpath = $this->uploadSimgleMedia($req->cat_icon,$slug,'category');

        $category = Category::findOrNew($id);
        $category->title=$req->title;
        $category->category_id=$req->parent_id;
        $category->title_slug=$slug;
        $category->cat_icon=$iconpath;
        $category->save();
        return redirect('/category');

    }
    function categorydelete($id)
    {
       
        Category::find($id)->delete();
        return back();
    }
    function categoryedit($id)
    {
       
        $categories = Category::with('subcategories')->Latest()->paginate(8); //all dile shob chole ashe asc order e  Category::all()   //Category::Latest()->get()
        $parentcategories = Category::where('category_id',null)->with('subcategories')->Latest()->paginate(8);
        $foundcategory=Category::find($id);
        return view('backend.category',compact('foundcategory','categories','parentcategories'));
        
    }
}
