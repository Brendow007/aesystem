<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class VerifyIsUserCon {


    public function handle($request, Closure $next)
    {
        if(Auth::guest() || Auth::user()->perfil != 'Administrador' && Auth::user()->perfil != 'Gerente'){
            return redirect('/');
        }

        return $next($request);
    }



}