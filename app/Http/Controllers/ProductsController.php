<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProductsController;
use App\Models\Product;
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

        $product=new Product();
        $product->title = $request->title;
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
