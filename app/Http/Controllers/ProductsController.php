<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Foundation\Auth\User as Authenticatable;
class ProductsController extends Controller
{
    public function index(){

        $user = auth()->user();
        //nos aseguramos que el usuario esta autenticado
        $products = $user->productS;
        //asignamos los productos de solo el usuario que esta auth
        //echo $products;
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
            'price' => 'required|gte:5',
            'user_id' =>'required|integer|gte:1'
        ]);

        $product=new Product();
        $product->title = $request->title;
        $product->country = $request->country;
        $product->price = $request->price;
        $product->user_id = $request->user_id;//no asigna
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
