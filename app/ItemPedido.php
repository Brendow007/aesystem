<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemPedido extends Model {

    protected $fillable = ['pedido_id','nome','preco','quantidade'];


	#possuido por pedido
    public function pedido(){
        return  $this->belongsTo('App\Pedido');
    }
}

