<?php

namespace App\Http\Controllers;
use App\Product;
use App\User;
use Illuminate\Http\Request;
class HomeController extends Controller
{

    public function about(){
        return view('layouts/about');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {$users=User::all();
        $products=Product::all();
        return view('home',compact('products','users'));
    }

    public function showCategory(){
        return view('category.category');
    }

    public function showCart(){
        return view('user.cart.cart');
    }


    public function profile(){
        return view('user.profile');

    }
}
