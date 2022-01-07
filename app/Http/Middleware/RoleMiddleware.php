<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if(Auth::user()->role->name != $role){
            return redirect()->route('home');
            abort('ban khong co quyen vao trang nay',504);
        }
        /* return $next($request); */
    }
}
