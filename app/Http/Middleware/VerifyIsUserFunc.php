<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class VerifyIsUserFunc {


    public function handle($request, Closure $next)
    {
        if(Auth::guest() || Auth::user()->perfil != 'Administrador' && Auth::user()->perfil != 'Funcionario'){
            return redirect('/');
        }

        return $next($request);
    }



}