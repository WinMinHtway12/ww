<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\ProductInserRequest;
use App\Http\Controllers\Controller;
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
        $products=Product::all();
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductInserRequest $request)
    {
        $file = $request->file('file');
        $filename = uniqid() . '_' . $file->getClientOriginalName();
        $file->move(public_path() . '/uploads', $filename);

        Product::create([
            'name' => $request->get('name'),
            'image' => $filename,
            'price' => $request->get('price'),
            'description' => $request->get('description')
        ]);
        return redirect('admin/products/create')->with('status', 'Successfully Inserted!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::whereId($id)->firstOrFail();
        return view('admin.products.edit',compact('product'));
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
       $product=Product::find($id);
        $product->name=$request->name;
        $product->price=$request->price;

        $product->description=$request->description;
        $product->update();
        return redirect('admin/products/'.$id.'/edit')->with('status','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $product=Product::all();
        if(
        Product::where('id', $id)->delete()){
            $products=Product::all();
        }

        return view('admin.products.index',compact('products'));
    }
}
