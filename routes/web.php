<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shop', [ProductController::class, 'index'])->name('shop.index');
Route::get('/add-product', [ProductController::class, 'create'])->name('product.create');
Route::post('/add-product', [ProductController::class, 'store'])->name('product.store');