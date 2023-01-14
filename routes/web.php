<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ExcelController;
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
    return view('products.hello');
})->name('products.hello');

/*
Route::get('/products',[ProductsController::class,'index'])->name('products.index');

Route::get('/products/create',[ProductsController::class,'create'])->name('products.create');

Route::POST('/products/create',[ProductsController::class,'store'])->name('products.store');

*/

Route::resource('products',ProductsController::class);
/*
Route::get('exports/prod',[App\Http\Controllers\ExcelController::class, 'ProductExport']);
*/

Route::get('/export', function () {
    return view('products.export');
})->name('products.export');


Route::get('/do-export',[\App\Http\Controllers\ExcelController::class,'ProductsExport'])->name('product.ProductsExport');

Route::resource('product',ExcellController::class);
