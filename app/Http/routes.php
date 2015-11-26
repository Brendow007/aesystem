<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', 'WelcomeController@index');
//home
Route::get('home', 'HomeController@index');

Route::get('lista-produtos1', ['as' => 'listaprodutos1', 'uses' => 'MenuController@produtos1']);
Route::get('lista-produtos2', ['as' => 'listaprodutos2', 'uses' => 'MenuController@produtos2']);
Route::get('lista-produtos3', ['as' => 'listaprodutos3', 'uses' => 'MenuController@produtos3']);
Route::get('lista-produtos4', ['as' => 'listaprodutos4', 'uses' => 'MenuController@produtos4']);
Route::get('lista-produtos5', ['as' => 'listaprodutos5', 'uses' => 'MenuController@produtos5']);

//Users
Route::get('/users/listar','UserController@listar');
//edit
Route::get('users/editar/{id}',['as' => 'users.edit', 'uses' => 'UserController@editar'])->where('id', '[0-9]+');

Route::put('users/update/{id}', ['as' => 'users.update', 'uses' => 'UserController@update'])->where('id', '[0-9]+');
//delete
Route::get('/users/deletar/{id}','UserController@deletar')->where('id', '[0-9]+');
//detalhe
Route::get('/users/detalhar/{id}','UserController@detalhar')->where('id', '[0-9]+');

//Exemplo
//Route::get('/users/perfil','UserController@perfil');




//Exemplo
//Route::get('pedido','PedidoController@listar');

//registrando os controllers dessa forma, basta seguir uma convenço nos metodos
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Lista os pedidos
Route::get('pedidos/lista-pedidos', ['as' => 'pedidos.listapedidos', 'uses' => 'PedidosController@listaPedidos']);

//Detalha o pedido
Route::get('pedidos/visualiza-pedido/{id}', ['as' => 'pedidos.visualiza', 'uses' => 'PedidosController@visualizaPedido']);


Route::get('carrinho','CarrinhoController@carrinho');

//acessa detalhes do item
Route::get('carrinho/comprar/{id}', ['as' => 'carrinho.comprar', 'uses' => 'CarrinhoController@comprar']);

//Limpa o carrinho
Route::post('carrinho/limpar', ['as' => 'carrinho.limpar', 'uses' => 'CarrinhoController@limparCarrinho']);

//adiciona o item no carrinho
Route::post('carrinho/adiciona', ['as' => 'carrinho.adiciona', 'uses' => 'CarrinhoController@adiciona']);

//acessa o carrinho.
Route::get('carrinho/carrinho', ['as' => 'carrinho.carrinho', 'uses' => 'CarrinhoController@carrinho']);

//deleta 1 item do carrinho
Route::delete('carrinho/remove',['as' => 'carrinho.remove', 'uses' => 'CarrinhoController@remove']);

//acessa o total do carrinho
Route::get('carrinho/total', 'CarrinhoController@totalPrice');

//finaliza o carrinho junto com o pedido e limpa o carrinho
Route::post('carrinho/finaliza', ['as' => 'carrinho.finaliza', 'uses' => 'CarrinhoController@finalizarCarrinho']);


#
Route::get('users/listar','UserController@listar');

//Rota padrao restfull [GET, PUT, POST e DELETE]

Route::resource('produtos', 'ProdutoController');

