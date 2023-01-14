<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
class ProductsController extends Controller
{
    public function index(){

        $products = Product::all();
        return view('products.index',compact('products'));
    }

    public function create(){

        return view('products.create');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'title' => 'required|max:20',
            'country' => 'required|max:20',
            'price' => 'required|gte:5'
        ]);

        $product=new Product();
        $product->title = $request->title;
        $product->country = $request->country;
        $product->price = $request->price;
        $product->save();
        return redirect()->route('products.index')->with('sucess','Producto salvado');
    }

    public function edit($id)
    {

        $product = Product::find($id);
        return view('products.edit',compact('product'));
    }

    public function update(Request $request,$id){
        $request->validate([
            'title' => 'required|max:20',
            'country' => 'required|max:20',
            'price' => 'required|gte:5'
        ]);
        $product = Product::find($id);
        $product->title =  $request->title;
        $product->country = $request->country;
        $product->price = $request->price;
        $product->save();
        return redirect()->route('products.index');
    }

    public function destroy($id): \Illuminate\Http\RedirectResponse
    {

        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');


    }
}
