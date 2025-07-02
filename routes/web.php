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
    return view('landing');
});

Route::get('/produk', function () {
    $produk = [
        ['nama' => 'Sayur Segar', 'harga' => 10000, 'rating' => 4.8, 'gambar' => 'sayur.jpg'],
        ['nama' => 'Ruched Crop Top', 'harga' => 100000, 'rating' => 5.0, 'gambar' => 'crop.jpg'],
        ['nama' => 'Pot Tanah Liat', 'harga' => 50000, 'rating' => 4.8, 'gambar' => 'pot.jpg'],
        ['nama' => 'Jepun Bali', 'harga' => 10000, 'rating' => 4.8, 'gambar' => 'jepun.jpg'],
        ['nama' => 'Orange Juice', 'harga' => 15000, 'rating' => 4.9, 'gambar' => 'jus.jpg'],
        ['nama' => 'Popok Bayi', 'harga' => 45000, 'rating' => 4.5, 'gambar' => 'popok.jpg'],
    ];
    
    return view('produk', compact('produk'));
})->name('produk');
