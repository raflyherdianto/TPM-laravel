<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsPegawai
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check() || !(auth()->user()->level == 'Pegawai' || auth()->user()->level == 'Administrator')) {
            abort(403);
        }

        return $next($request);
    }
}
