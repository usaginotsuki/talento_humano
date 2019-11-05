<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CarreraStoreRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'CAR_NOMBRE'=>'required|unique:carrera,CAR_NOMBRE| regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/',
			'CAR_ABREVIATURA'=>'required| regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/'
		];
	}
	public function messages()
	{
		return [
			'CAR_NOMBRE.regex'=>'El nombre de la carrera no puede tener carcteres especiales',
			'CAR_NOMBRE.unique'=>'Esa carrera ya esta registrada',
			'CAR_ABREVIATURA.regex'=>'La abreviatura no puede tener carcteres especiales'
		];
	}

}
