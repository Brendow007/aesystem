<?php namespace App\Services;

use App\Pessoa;
use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6'
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
        #$p = new Pessoa();

        $u = new User();

        #$p->user($u);
        //$u->pessoa()->save($p);


        return $u::create([

		'name' => $data['name'],
		'email' => $data['email'],
		'password' => bcrypt($data['password']),
        'perfil' =>'null',
        'cpf' =>'null',
        'telefone' =>'null',
        'endereco' =>'null'

        ]);
/*
        $p::create([
        'perfil'=>'default',
        'cpf'=>'default',
        'telefone'=>'default',
        'endereco'=>'default',
        ]);

*/

    }

}
