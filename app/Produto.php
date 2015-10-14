<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {

    //aqui eu defino os campos que serao aceitos para serem persistidos no banco de dados, nao precisa de get e set, apenas isto:
    //

    protected $fillable = ['nome', 'tipo', 'preco','quantidade','disponibilidade', 'descricao'];


}


/*
 * fluxo basico pra criar o crud:
 *
 * crie a classe de modelo "php artisan make:model nome-do-modelo"
 * crie o formrequest para validaçao "php artisan make:request nome-do-request"
 *
 * crie o controller "php artisan make:controller nome-do-controller"
 *
 * e o resto e so codificar.
 */
