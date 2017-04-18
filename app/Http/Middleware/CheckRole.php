<?php

namespace App\Http\Middleware;

use Closure;

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
            return redirect('/auth/login');
        }
        //if(Auth::user()->role <> "admin"){
        if(Auth::user()->role <> $role){
            return redirect('/auth/login');
        }
        return $next($request);
    }
}
