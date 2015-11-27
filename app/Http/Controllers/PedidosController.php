<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pedido;
use Illuminate\Http\Request;

class PedidosController extends Controller {

//Esta função indica que, ao alguem tentar acessar as funções deste controllador que foi apontado pala classe "routes"
//Ela requisita uma autenticação de Usuário

    public function __construct(){
        $this->middleware('auth.func');
    }

    //respond to lista-pedidos
    public function listaPedidos(){
        //para aumentar a quantidade de registros por pagina basta trocar o 2 pela quantidade
        $pedidos = Pedido::orderBy('created_at', 'desc')->paginate(8);

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
