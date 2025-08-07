<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $produk = Product::all();
        return view('produk', compact('produk'));
    }

    public function show(Product $produk)
    {
        // Simpan ID produk ke session untuk redirect setelah login
        session(['produk_redirect' => $produk->id]);

        return view('detail_produk', compact('produk'));
    }
}
