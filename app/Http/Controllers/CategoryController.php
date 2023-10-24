<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('user.category.category',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Category::create(
            ['name'=>$request->get('name')]
        );
        return redirect('category/create')->with('status','Successfully Created!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $category= Category::find($id);
       return view('user.category.update',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $category= Category::whereId($id)->firstOrFail();
       $category->name=$request->get('name');
       $category->update();
        return redirect ('user/category/'.$id.'/edit')->with('dd','Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destory(Request $request,$id)
    {$items=array();
        $product=Cart::all();
      if(  Cart::where('id', $id)->delete()){
        $products=Cart::all();
      }
        /* $request->session()->flash('success', 'Item Cart Remove Successfully');
        if ($request->session()->has('items')) {
           $items=session('items');
           $request->session()->flush();

        } */



        return view('user.cart.home', compact('products'));
}

public function removeCart(){
   $products= Cart::truncate();
   return view('user.cart.remove');
}


}

