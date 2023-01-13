<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('layout.app');
});


Route::get('/products',[ProductsController::class,'index'])->name('products.index');

Route::get('/products/create',[ProductsController::class,'create'])->name('products.create');

Route::POST('/products/create',[ProductsController::class,'store'])->name('products.store');

Route::resource('products',ProductsController::class);



