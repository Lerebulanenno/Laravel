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
        // $produk = Product::find($id);

        // if (!$produk) {
        //     abort(404); //kalau produk gak ada
        // }
        
       return view('detail_produk', compact('produk'));
    }
}
