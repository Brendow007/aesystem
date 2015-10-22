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


#editar usuario
    public function editar($id){
        $users = User::find($id);

        return view('users/editar')->with('users', $users);
        //return view('produtos.edit')->with('produto', $produto);

        //Flash::message("Em manutenção!");
     # return "Modulo em Manutenção!";
     }

#detalhar usuário
    public function detalhar($id){

       // Flash::message("Em manutenção!");
       // $users = User::all();
        $pessoas = Pessoa::all();

        $busca = DB::select('select * from users where id = ?' , [$id]);

        //Condição de existência
        if(empty($busca)) {
            return 'Usuario Inexistente';

        }return view('users/detalhar')->with('users',$busca)->with('pessoas',$pessoas);}


#deletar usuário
    public function deletar($id)
    {
        if($id == null){
            abort(404);
        }

        $user = User::find($id);
        $user->delete();
        Flash::error("Usuário removido com sucesso!");

        return redirect()->action('UserController@listar');
    }


}
