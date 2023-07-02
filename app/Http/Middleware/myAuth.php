<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class myAuth
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
        $user = Auth::user();

        if(Auth::guest()){
            return redirect('login');
        } elseif ($user->name == 'Sengly Thy'){
            return dd('You Are Admin!');
        }

        return $next($request);
    }
}
