<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RememberLastProduct
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check() && $request->routeIs('produk.show')) {
            $produkId = $request->route('produk'); // ambil ID dari URL
            session(['produk_redirect' => $produkId]);
        }

        return $next($request);
    }
}