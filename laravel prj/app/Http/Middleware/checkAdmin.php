<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth; //use thư viện auth

class checkAdmin
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
        if (Auth::guard('loyal_admin')->check()) {
            return $next($request);
        }
        return redirect('admin-auth');
    }
}
