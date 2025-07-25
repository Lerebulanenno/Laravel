<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // Menampilkan isi keranjang
    public function index()
    {
        $cart = session()->get('cart', []);
        $totalHarga = collect($cart)->sum('harga');
        return view('cart', compact('cart', 'totalHarga'));
    }

    // Menyimpan produk ke keranjang
    public function store(Request $request)
    {
        $cart = session()->get('cart', []);

        // Tambahkan item baru ke cart
        $cart[] = [
            'id'     => $request->id,
            'nama'   => $request->nama,
            'harga'  => $request->harga,
            'gambar' => $request->gambar,
        ];

        session()->put('cart', $cart);

        // Jika request JSON (AJAX), kembalikan response JSON
        if ($request->isJson()) {
            return response()->json(['message' => 'Produk berhasil ditambahkan ke keranjang!']);
        }

        return redirect()->route('cart');
    }

    // Menghapus produk dari keranjang
    public function destroy($id)
    {
        $cart = session()->get('cart', []);

        // Filter cart dan hapus item dengan ID yang sesuai
        $cart = array_values(array_filter($cart, function ($item) use ($id) {
            return $item['id'] != $id;
        }));

        session()->put('cart', $cart);

        return redirect()->route('cart')->with('success', 'Produk berhasil dihapus dari keranjang!');
    }
}
