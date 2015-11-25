<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model {

    protected $fillable = ['mesa', 'total'];


    #pedido possui item

    public function itens(){

        return $this->hasMany('App\ItemPedido');
    }
}
