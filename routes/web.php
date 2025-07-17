<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Landing page
Route::get('/', function () {
    return view('landing');
});

// Produk (pakai controller resource)
Route::resource('produk', ProductController::class);

// Halaman Cart (sementara masih pakai view statis)
Route::get('/cart', function () {
    return view('cart');
})->name('cart');
