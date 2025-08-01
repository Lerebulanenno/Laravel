<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

// ==================
// HALAMAN UMUM
// ==================
Route::get('/', function () {
    return view('landing'); // Landing page custom
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ==================
// ROUTE AUTH (untuk user biasa)
// ==================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// ==================
// ROUTE PRODUK (user)
// ==================
Route::resource('produk', ProductController::class);

// ==================
// ROUTE CART (user)
// ==================
Route::controller(CartController::class)->group(function () {
    Route::get('/cart', 'index')->name('cart');
    Route::post('/cart', 'store')->name('cart.store');
    Route::delete('/cart/{id}', 'destroy')->name('cart.destroy');
    Route::post('/cart/delete-selected', 'deleteSelected')->name('cart.deleteSelected');
    Route::get('/cart/clear', function () {
        session()->forget('cart');
        return redirect()->route('cart')->with('success', 'Cart berhasil dikosongkan!');
    })->name('cart.clear');
});

