<?php

namespace App\Http\Controllers;

use App\Cart;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::all();
        return view('user/product/home', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    { $products=Cart::all();
       /*  $carts = $request->session()->get('items');
        $products = array();
        for ($i = 0; $i < count($carts); $i++) {
            $product = Cart::find($carts[$i]);
            array_push($products, $product);
        } */
        return view('user.cart.home', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function add(Request $request, $id)
    { $products = Product::all();
        $product = Product::find($id);
        $image = $product->getOriginal('image');
        $items = array();
        if ($request->session()->has('items')) {
            Cart::create([
                'name' => $product->getOriginal('name'),
                'productId' => $product->getOriginal('id'),
                'image' => $image,
                'price' => $product->getOriginal('price'),




            ]);
            $items = $request->session()->get('items');

            if (!in_array($id, $items)) {
                array_push($items, $id);

            }
        } else {

            array_push($items, $id);
            Cart::create([
                'name' => $product->getOriginal('name'),
                'productId' => $product->getOriginal('id'),
                'image' => $product->getOriginal('image'),
                'price' => $product->getOriginal('price'),




            ]);
        }
        $request->session()->put('items', $items);


        /* return $product->getOriginal('image'); */









       /*  $cid = $cart->get('productId');
        if ($pid == $cid) {
            return $pid; */
           /*  */

        return view('user/product/home', compact('products'));
    }

    /*   if($product->get('id') = $cartId)
        Cart::create([
            'name' => $product->getOriginal('name'),
            'productId'=>$product->getOriginal('id'),
            'image' => $product->getOriginal('image'),
            'price' => $product->getOriginal('price'),

        ]); */



    // } */
}
