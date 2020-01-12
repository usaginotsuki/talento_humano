<?php namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Support\Facades\DB;
use App\Role;
use App\Empresa;
class UserController extends Controller
{
	use AuthenticatesAndRegistersUsers;

    public function __construct(Registrar $registrar)
    {
		$this->registrar = $registrar;

        $this->middleware('auth');
    }
    public function index()
    {
        $users = User::all();
        $title = 'Listado de usuarios';
        return view('user.index', [
            'title' => $title,
            'users' => $users
        ]);
    }
    public function getRegister()
	{
		$role= Role::all();
		$empresas=Empresa::all();
		return view('user.create',[
			'role' => $role,
			'empresas' => $empresas
		]);
	}
	//Registrar Usuario
	public function postRegister(Request $request)
	{
		//Valida los campos de registrar
		$validator = $this->registrar->validator($request->all());
		// si existe errores retorna a la vista Registrar con los errores
		if ($validator->fails())
		{
			$this->throwValidationException(
				$request, $validator
			);
		}
		$this->registrar->create($request->all());
		
		//Redirecciona a la pagina principal
		return redirect('user')
			->with('title', 'Usuario Creado!')
			->with('subtitle', 'La creacion del usuario se ha realizado con éxito.');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{   
		$user= User::find($id);
		$role= Role::all();
		$empresas=Empresa::all();
		return view('user.update', [
			'role' => $role,
			'empresas' => $empresas,
			'user' => $user
			]);
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	
	public function update(Request $request)
	{
		$user= User::find($request['id']);
		$user->fill($request->all());
		$user->save();
		return redirect('user')
			->with('title', 'Usuario actualizado!')
			->with('subtitle', 'La actualización de la usuario se ha realizado con éxito.');			
	}
		/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);
		return redirect('user')
			->with('title', 'Usuario eliminada!')
			->with('subtitle', 'La eliminación de la usuario se ha realizado con éxito.');
	}
	/**
	 * Show the form for editing the password
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function changePassword($id)
	{   
		$user= User::find($id);
		return view('user.updatePassword', [
			'user' => $user
			]);
	}
	/**
	 * Show the form for editing the password
	 *
	 * @param  int  $id
	 * @return Response
	 */
	
	public function updatePassword(Request $request)
	{
		//Valida los campos de registrar
		$validator = $this->registrar->validatorPassword($request->all());
		// si existe errores retorna a la vista Registrar con los errores
		if ($validator->fails())
		{
			$this->throwValidationException(
				$request, $validator
			);
		}
		$user= User::find($request['id']);
		$user->password=bcrypt($request['password']);
		$user->save();
		return redirect('user')
			->with('title', 'Contraseña actualizada!')
			->with('subtitle', 'La actualización de la contraseña de '.$user->name.' se ha realizado con éxito.');			
	}
}