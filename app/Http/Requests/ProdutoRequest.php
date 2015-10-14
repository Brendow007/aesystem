<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProdutoRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
     * Determina se o usurio esta autorizado para fazer a requisicao
	 *
	 * @return bool
	 */
	public function authorize()
	{
        //agora esta autorizado
        //condição do perfil
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
        //aqui neste array se define as regras para cada campo
		return [
		    'nome' => 'required|min:3',
            'tipo' => 'required',
            'preco' => 'required|numeric',
            'descricao' => 'required|min:3|max:1048'
		];
	}

}