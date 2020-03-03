<?php namespace App\Services;

use App\User;
use App\Role;
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
			'password' => 'required|confirmed|min:6',
			'empresa' =>'required|not_in:0',
			'role' =>'required|not_in:0',
		]);
	}
	public function validatorPassword(array $data)
	{
		return Validator::make($data, [
			'password' => 'required|confirmed|min:6',
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
		$user= User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
			'role_id' => $data['role'],
			'EMP_CODIGO' => $data['empresa'],
			'nameComplete' => $data['nameComplete'],
		]);
		return $user;
	}

}
