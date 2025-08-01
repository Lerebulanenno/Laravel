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

Route::view('/example-page', 'example-page');
Route::view('/example-auth', 'example-auth');
Route::view('/another-auth', 'another-auth');

Route::get('/admin/login', function () {
    return view('back.pages.admin.auth.login');
})->name('admin.login');

Route::post('/login_handler', [AdminController::class, 'loginHandler'])->name('login_handler');

Route::get('/admin/home', function () {
    return view('back.pages.admin.home');
})->name('admin.home');

Route::post('/admin/logout', [AdminController::class, 'logoutHandler'])->name('admin.logout');

Route::get('/admin/forgot-password', [AdminController::class, 'forgotPassword'])->name('admin.forgot');

Route::post('/admin/send-password-reset-link', [AdminController::class, 'sendPasswordResetLink'])->name('admins.send_password_reset_link');

Route::get('/admin/password/reset/{token}', [AdminController::class, 'resetPassword'])->name('admin.password-reset');