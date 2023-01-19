<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('list.product');
Route::get('/product/{slug}', [App\Http\Controllers\HomeController::class, 'detail'])->name('detail');
Route::get('/cart', [App\Http\Controllers\HomeController::class, 'cart'])->name('cart');
Route::post('/cart', [App\Http\Controllers\HomeController::class, 'add_to_cart'])->name('add_to_cart');
Route::delete('/cart/{id}', [App\Http\Controllers\HomeController::class, 'destroy_cart_product'])->name('destroy_cart_product');

Auth::routes();

// prefixs url, seluruh url mengandung awalan v1
// contoh http://127.0.0.1:8000/v1/product dan seterusnya
Route::prefix('v1')->middleware('role:admin')->group(function () {
    //penambahan middleware ('role:admin')adalah sebagai gerbang pembatas antara user dan admin, user dilarang masuk kecuali admin

    // dashboard 
    Route::get('', [App\Http\Controllers\Backend\IndexController::class, 'index'])->name('dashboard');

    // route product
    Route::resource('product', App\Http\Controllers\Backend\ProductController::class);

    // route users
    Route::resource('users', App\Http\Controllers\Backend\ProductController::class);

    // route orders
    Route::get('orderan', [App\Http\Controllers\Backend\OrderanController::class, 'index'])->name('orderan.index');

    // route reviews
    Route::get('review', [App\Http\Controllers\Backend\ReviewController::class, 'index'])->name('review.index');

    
});
