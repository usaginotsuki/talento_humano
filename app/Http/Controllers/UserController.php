<?php namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Support\Facades\DB;
use App\Role;
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
		return view('user.create',[
			'role' => $role
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
		return redirect('user');
	}


}