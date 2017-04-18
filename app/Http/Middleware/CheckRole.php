<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
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
        //echo "Rodou Middleware";

        if (!Auth::check()){
            return redirect('/login');
        }
        //if(Auth::user()->role <> "admin"){
        if(Auth::user()->role <> $role){
            return redirect('/login');
        }
        return $next($request);
    }
}
