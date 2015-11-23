<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model {

    //nao precisa tirar o user_id do fillable.
    protected $fillable = ['user_id','perfil','cpf','telefone','endereco'];


    //uma pessoa pertence (belogs to) a um usuario
/*    public function user()
    {
       return  $this->belongsTo('App\User');
    }
*/
}
