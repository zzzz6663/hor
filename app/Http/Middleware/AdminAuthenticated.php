<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        dd($request->user()->comments());
        $admin_level=$request->user()->admin_level();

        if ($admin_level=='admin'){
            return $next($request);
        }
        return redirect(route('home'));

    }
}
