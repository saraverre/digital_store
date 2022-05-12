<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/products-list', [ProductController::class, 'list'])->name('products.list');
    Route::post('/get-price', [ProductController::class, 'get_price'])->name('product.price');
});


Route::middleware(['auth.admin'])->group(function () {
    Route::get('/new-product', [ProductController::class, 'create'])->name('admin.new');
    Route::post('/store-product', [ProductController::class, 'store'])->name('admin.store');
});
