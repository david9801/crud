<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
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
})->name('products.hello')->middleware('auth');
/*
Route::get('/products',[ProductsController::class,'index'])->name('products.index');

Route::get('/products/create',[ProductsController::class,'create'])->name('products.create');

Route::POST('/products/create',[ProductsController::class,'store'])->name('products.store');

*/
Route::resource('products',ProductsController::class)->middleware('auth');
Route::get('/export', function () {
    return view('products.export');
})->name('products.export')->middleware('auth');
Route::get('/do-export',[\App\Http\Controllers\ExcelController::class,'ProductsExport'])->name('product.ProductsExport')->middleware('auth');
Route::resource('product',ExcelController::class)->middleware('auth');

/*
 * Usuarios: tanto VIEW como NAME han de ser iguales, en URI pongo practicamente lo que quiera
 */

/*
 * Route::get('/reg1', function () {
    return view('usi.register');
})->name('usi.register');
Route::get('/login1', function () {
    return view('usi.login');
})->name('usi.login');

Route::get('/privada11', function () {
    return view('usi.secret');
})->name('usi.secret');
*/




Route::get('/register',[RegisterController::class,'create'])->name('register');
Route::POST('/do-register',[RegisterController::class,'store'])->name(('do-register'));

Route::get('/login',[SessionsController::class,'login'])->name('login');
Route::POST('/do-login',[SessionsController::class,'doLogin'])->name('do-login');



Route::POST('/logout',[SessionsController::class,'logout'])->name('log-out')->middleware('auth');

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/secret', function () {
        return view('usi.secret');
    })->name('usi.secret');
});
