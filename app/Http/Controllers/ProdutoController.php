<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

use App\Produto;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class ProdutoController extends Controller {


    public function __construct(){
        $this->middleware('auth.admin');
    }

        //registra o middleware de autenticacao para todos os recursos deste controller.

    //ja vem com todos os metodos de CRUD
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //vamos retornar a view que faz a listagem "com" a lista de produtos
        $produtos = Produto::all();

        //associa a lista de produtos a uma chave [produtos] que sera acessada na pagina de visualizacao
		return view('produtos.index')->with('produtos', $produtos);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        //quando o metodo for requisitado ele retornara a seguinte pagina
        return view('produtos.create');

        //que vai estar dentro do diretorio /resources/views/produtos
	}


	public function store(Requests\ProdutoRequest $request)
	{
		//este metodo recebe os parametros passasdos pelo formulario
        //vamos pegar todos os parametros e armarzenar no banco de dados
        Produto::create($request->all());

        //armazena a mensagem
        Flash::message("Produto adicionado com sucesso!");

        //e em seguida redirecionar o usuario para a pagina com a lista dos produtos cadastrados
        return redirect()->route('produtos.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        //vou pegar o produto baseado no id passado como parametro, mas antes vou verificar se o id foi passado
        if($id == null){
            //lanca uma excecao de pagina nao encontrada
            abort(404);
        }

        //encontre o produto com o id passado
		$produto = Produto::find($id);

        //retorna a pagina (view) "com" o produto encontrado

        return view('produtos.show')->with('produto', $produto);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		if($id == null){
            abort(404);
        }

        $produto = Produto::find($id);

        return view('produtos.edit')->with('produto', $produto);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Requests\ProdutoRequest $request, $id)
	{

        if($id == null){
            abort(404);
        }

        //recupera o produto
        $produto = Produto::find($id);

        //atualiza o produto com os possveis novos valores vindos do formulario de edicao
        $produto->update($request->all(), $id);

        Flash::warning("Produto atualizado com sucesso!");

        //redireciona novamente para index.
        return redirect()->route('produtos.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if($id == null){
            abort(404);
        }

        Produto::destroy($id);

        Flash::error("Produto removido com sucesso!");

        return redirect()->route('produtos.index');
	}



    public function cart(){
//https://github.com/Crinsane/LaravelShoppingcart#usage

      //  $produto = new Produto();
       // Cart::associate($produto)->add();

        //Cart::instance('Carrinho')->add(Produto::all());
        //Cart::instance('shopping')->add('192ao12', 'Product 1', 1, 9.99);
       //$content = Cart::content();

        return view('carrinho');

        //view('carrinho')->with


    }
}
