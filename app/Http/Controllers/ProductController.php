<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        // Filter Lokasi (jika ada)
        if ($request->filled('lokasi')) {
            $query->whereIn('lokasi', $request->lokasi);
        }

        // Filter Kategori (jika ada)
        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }

        $produk = $query->get();

        return view('produk', compact('produk'));
    }

    public function show(Product $produk)
    {
        session(['produk_redirect' => $produk->id]);
        return view('detail_produk', compact('produk'));
    }
}


