<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('createproduct');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required', 'max:25',
            'price' => 'required',
        ]);

        $POST = new Product;

        $POST->name = $request->input('name');
        $POST->price = $request->input('price');
        $POST->description = $request->input('description');
        $POST->service = $request->input('service');

        $POST->save();

        return redirect('/products')->with('success', 'Product Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $products = Product::paginate(5);

        return view('products', ['products' => $products]);
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
        $this->validate($request, [
            'name' => 'required', 'max:25',
            'price' => 'required',
        ]);

        $UPADTE = Product::find($id);

        $UPADTE->name = $request->input('name');
        $UPADTE->price = $request->input('price');
        $UPADTE->description = $request->input('description');
        $UPADTE->service = $request->input('service');

        $UPADTE->save();

        return redirect('/products')->with('success', 'Product Saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();

        return redirect('products')->with('danger', '!!Product deleted.');
    }
}
