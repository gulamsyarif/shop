<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Shop;
use App\Livewire\Product;
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

Route::get('/', shop\index::class)->name('shop.index');
Route::get('/cart', shop\cart::class)->name('shop.cart');
Route::get('/checkout', shop\checkout::class)->name('shop.checkout');
Route::get('/deskripsi', function () {
    return view('deskripsi');
})->name('shop.deskripsi');
