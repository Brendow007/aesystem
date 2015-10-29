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

Route::get('lista-produtos', ['as' => 'listaprodutos', 'uses' => 'HomeController@produtos']);

//Users
Route::get('/users/listar','UserController@listar');
Route::get('/users/editar/{id}','UserController@editar');
Route::get('/users/atualizar','UserController@update');
Route::get('/users/deletar/{id}','UserController@deletar');
Route::get('/users/detalhar/{id}','UserController@detalhar')->where('id', '[0-9]+');
Route::get('/users/perfil','UserController@perfil');

//Pedido
Route::get('pedido','PedidoController@listar');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('carrinho','CarrinhoController@carrinho');

//acessa detalhes do item
Route::get('carrinho/comprar/{id}', ['as' => 'carrinho.comprar', 'uses' => 'CarrinhoController@comprar']);

Route::post('carrinho/limpar', ['as' => 'carrinho.limpar', 'uses' => 'CarrinhoController@limparCarrinho']);

//adiciona o item no carrinho
Route::post('carrinho/adiciona', ['as' => 'carrinho.adiciona', 'uses' => 'CarrinhoController@adiciona']);

//acessa o carrinho.
Route::get('carrinho/carrinho', ['as' => 'carrinho.carrinho', 'uses' => 'CarrinhoController@carrinho']);

Route::delete('carrinho/remove',['as' => 'carrinho.remove', 'uses' => 'CarrinhoController@remove']);

Route::get('carrinho/total', 'CarrinhoController@totalPrice');


##
Route::get('users/listar','UserController@listar');

//vou criar uma rota seguindo o padrao restfull [GET, PUT, POST e DELETE]

Route::resource('produtos', 'ProdutoController');

