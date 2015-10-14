<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Pessoa;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class UserController extends Controller {

    public function __construct(){$this->middleware('auth');}

    public function listar()
	{

    $users = User::all();
    return view('users.listar')->with('users',$users);

	}

public function perfil(){
    $users = User::all();

    $pessoa = Pessoa::all();
    return view('users/perfil')->with('pessoa',$pessoa);
}
public function editar(){

    //Flash::message("Em manutenção!");
        return "Modulo em Manutenção!";
}
    public function detalhar($id){

       // Flash::message("Em manutenção!");
       // $users = User::all();
        $pessoas = Pessoa::all();

        $busca = DB::select('select * from users where id = ?' , [$id]);

        //Condição de existência
        if(empty($busca)) {
            return 'Usuario Inexistente';

        }return view('users/detalhar')->with('users',$busca)->with('pessoas',$pessoas);
}

}
