<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupllierController;
use App\Models\Products;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', [Homecontroller::class, 'index']);
// Route::get('/admin', [Homecontroller::class, 'welcome']);
Route::get('/admin', [Homecontroller::class, 'index']);
Route::resource('/admin/products',ProductController::class);
Route::resource('/admin/customers',CustomerController::class);
Route::resource('/admin/suplliers',SupllierController::class);
Route::resource('/admin/orders',OrderController::class);





Route::get('/', function () {
    return view('client.index');
    
});

Route::get('shop', function () {
    return view('client.shop');
});

Route::get('shop-single', function () {
    return view('client.shop-single');
});

Route::get('about', function () {
    return view('client.about');
});

Route::get('cart', function () {
    return view('client.cart');
});

Route::get('checkout', function () {
    return view('client.checkout');
});

Route::get('thankyou', function () {
    return view('client.thankyou');
});
