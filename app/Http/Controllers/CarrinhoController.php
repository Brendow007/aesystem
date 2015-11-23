<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ItemPedido;
use App\Pedido;
use Illuminate\Support\Facades\DB;
use App\Produto;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Laracasts\Flash\Flash;
use SebastianBergmann\Environment\Console;

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

            Flash::success("{$produto->nome} adicionado ao Pedido!");
            return redirect()->route('listaprodutos1');
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

            Flash::success("Item removido do pedido");

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

    /**
     * Finaliza o pedido recebendo a mesa como parametro da requisicao
     * abre o pedido, salva, e salva os itens no pedido.
     * @param Request $request
     */
    public function finalizarCarrinho(Request $request)
    {
        //esqueci dos metodos do package, perai.
        $itens  = Cart::content();

        $pedido = new Pedido();

        $pedido->mesa = $request->mesa;
        $pedido->total = Cart::total();

        $pedido->save();

        Log::info($pedido);

        //por enquanto vai ser assim, mas pense numa maneira melhor
        //de retornar o pedido criado.
        $pedidoAtual = Pedido::orderBy('id', 'desc')->first();

        $itensPedidos = array();

        foreach($itens as $iten){
            $itemPedido = new ItemPedido();

            $itemPedido->nome = $iten->name;
            $itemPedido->preco = $iten->price;
            $itemPedido->quantidade = $iten->qty;

            $itensPedidos[] = $itemPedido;
        }

        $pedidoAtual->itens()->saveMany($itensPedidos);

        $pedidoAtual->save();

        Cart::destroy();

        Flash::success("Pedido finalizado!");

        return redirect()->back();
    }


}
