<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemPedidosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('item_pedidos', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('nome');
            $table->double('preco');
            $table->double('quantidade');
            //e um pedido tem muitos itens, entao o lado N fica com a chave estrangeira de pedido
            $table->integer('pedido_id')->unsigned();
            $table->foreign('pedido_id')->references('id')->on('pedidos');
            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('item_pedidos');
	}

}
