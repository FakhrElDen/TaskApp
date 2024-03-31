<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Dashboard
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
        $adminCheck = session()->get('is_admin');
        if($adminCheck == null){
            return redirect(env('APP_URL').'/dashboard');
        }
        return $next($request);
    }
}
