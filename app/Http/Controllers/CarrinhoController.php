<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Produto;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class CarrinhoController extends Controller {

    public function comprar(Request $request){
        $produto = null;
            $produto = Produto::find($request->id);

            if($produto){
                return view('carrinho.comprar')->with('produto', $produto);
            }
    }

    public function adiciona(Request $request){

        $produto = Produto::find($request->id);

        if($produto->quantidade >= $request->quantidade){

            Cart::add(rand(1, 10000000), $produto->nome , $request->quantidade , $produto->preco, array('size' => 'large'));

            Flash::success("{$produto->nome} adicionado ao carrinho!");
            return redirect()->route('listaprodutos');
        }
        else{

            Flash::error("Existem apenas {$produto->quantidade} disponíveis");

            return redirect()->back();

        }

    }

    public function carrinho(){

       return view('carrinho.carrinho')->with('itens', Cart::content())->with('total', Cart::total())->with('totalItens', Cart::count());
    }
    
    public function remove(Request $request){
        if($request->rowid != null){
            Cart::remove($request->rowid);

            Flash::success("Item removido do carrinho");

            return redirect()->back();
        }
        else{
            abort(404);
        }
    }

    public function limparCarrinho(){

        Cart::destroy();

        Flash::success("Compra cancelada!");

        return redirect()->back();
    }


}
