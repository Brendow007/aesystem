<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pedido;
use Illuminate\Http\Request;

class PedidosController extends Controller {


    public function __construct(){
        $this->middleware('auth.admin');
    }

    //respond to lista-pedidos
    public function listaPedidos(){
        //para aumentar a quantidade de registros por pagina basta trocar o 2 pela quantidade
        $pedidos = Pedido::orderBy('created_at', 'desc')->paginate(5 );

        return view('pedidos.lista-pedidos')->with('pedidos', $pedidos);
    }

    public function visualizaPedido($id){
        $pedido = null;

        $pedido = Pedido::find($id);

        if($pedido){
            return view('pedidos.visualiza-pedido')->with('pedido', $pedido);
        }
        else{
            abort(404);
        }
    }

}
