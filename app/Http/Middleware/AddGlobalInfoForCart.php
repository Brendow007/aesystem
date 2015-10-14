<?php namespace App\Http\Middleware;

use Closure;
use Gloudemans\Shoppingcart\Facades\Cart;

class AddGlobalInfoForCart {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        //adiciona o total de itens para que seja disponvel em toda as requisiçes.
        view()->share('totalItens', Cart::count());

		return $next($request);
	}

}
