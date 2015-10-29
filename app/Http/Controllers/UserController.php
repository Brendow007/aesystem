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

     }


    public function update(Request $request, $id)
    {

        if($id == null){
            abort(404);
        }

        //recupera o produto
        $user = User::find($id);

        //atualiza o produto com os possveis novos valores vindos do formulario de edicao
        $user->update($request->all(), $id);

        Flash::warning("Usuario atualizado com sucesso!");

        //redireciona novamente para index.
        return redirect()->route('users/listar');
    }
    public function store(Requests $request)
    {
        //este metodo recebe os parametros passasdos pelo formulario
        //vamos pegar todos os parametros e armarzenar no banco de dados
        User::create($request->all());

        //armazena a mensagem
        Flash::message("Produto adicionado com sucesso!");

        //e em seguida redirecionar o usuario para a pagina com a lista dos produtos cadastrados
        return redirect()->route('produtos.index');
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
