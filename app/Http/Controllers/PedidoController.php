<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use phpDocumentor\Reflection\DocBlock\Tag\ReturnTag;

class PedidoController extends Controller{

//Esta função indica que, ao alguem tentar acessar as funções deste controllador que foi apontado pala classe "routes"
//Ela requisita uma autenticação de Usuário
    public function __construct(){$this->middleware('auth');}

    function listar(){

        //AO tentar acessar esta funcionalidae exibe esta mensagem
    //Flash::error("Este modulo está em manutenção! Tente mais tarde!");
    Return view('pedido');
}

}
