<?php

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\Shop\HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\Shop\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\Shop\AboutController::class, 'index'])->name('about');
Route::get('/contact', [App\Http\Controllers\Shop\ContactController::class, 'index'])->name('contact');
Route::get('/blog', [App\Http\Controllers\Shop\BlogController::class, 'index'])->name('blog');
Route::get('/whishlist', [App\Http\Controllers\Shop\WhishListController::class, 'index'])->name('whishlist');
Route::get('/cart', [App\Http\Controllers\Shop\WhishListController::class, 'index'])->name('cart');
Route::get('/checkout', [App\Http\Controllers\Shop\CheckOutController::class, 'index'])->name('checkout');
Route::get('/shop-list', [App\Http\Controllers\Shop\ShopListController::class, 'index'])->name('shop-list');



Route::get('/dashboard', [App\Http\Controllers\Store\DashboardController::class, 'index'])->name('dashboard');
Route::get('/category', [App\Http\Controllers\Store\CategoryController::class, 'index'])->name('category');
Route::get('/product', [App\Http\Controllers\Store\ProductController::class, 'index'])->name('product');
Route::get('/all-products', [App\Http\Controllers\Store\ProductController::class, 'products'])->name('all-products');
