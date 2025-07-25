<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

// Landing page
Route::get('/', function () {
    return view('landing');
});

// Produk (pakai controller resource)
Route::resource('produk', ProductController::class);

// Halaman Cart (sementara masih pakai view statis)
Route::controller(CartController::class)->group(function () {
    Route::get('/cart', 'index')->name('cart');
    Route::post('/cart', 'store')->name('cart.store');
    Route::delete('/cart/{id}', 'destroy')->name('cart.destroy');
    Route::get('/cart/clear', function () {
        session()->forget('cart');
        return redirect()->route('cart')->with('success', 'Cart berhasil dikosongkan!');
    })->name('cart.clear');
});

