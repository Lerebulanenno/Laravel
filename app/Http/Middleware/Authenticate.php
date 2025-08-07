<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {

            // Simpan URL terakhir yang diminta (sebelum login)
            session(['url.intended' => url()->full()]);

            if ($request->routeIs('admin.*')) {
                session()->flash('fail', 'You must login first');
                return route('admin.login');
            }
            return route('login'); // route login untuk user biasa
        }
    }
}
