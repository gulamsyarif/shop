<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Shop\Cart;
use App\Livewire;
use App\Livewire\Counter;
use App\Http\Controllers\HomeController;

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


Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin/product', [HomeController::class, 'index'])->name('admin.product');

Route::get('/', function () {
    return view('shop');
})->name('shop.index');
Route::get('/cart', function () {
    return view('cart');
})->name('shop.cart');
Route::get('/checkout', function () {
    return view('checkout');
})->name('shop.checkout');

