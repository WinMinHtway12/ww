<?php

namespace App\Http\Controllers\Admin;

use App\Cart;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showCategory(){
        $categories=Category::all();
        return view('user.category.category',compact('categories'));
    }
    public function create()
    {
        return view('user.category.create');
    }
    public function store(Request $request)
    {
        Category::create(
            ['name'=>$request->get('name')]
        );
        return redirect('admin/category/create')->with('status','Successfully Created!!');
    }
   

}
