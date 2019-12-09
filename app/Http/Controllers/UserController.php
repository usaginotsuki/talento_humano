<?php namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Role;
class UserController extends Controller
{
    public function index()
    {
        //$users = DB::table('users')->get();
        $users = User::all();
        $title = 'Listado de usuarios';
//        return view('users.index')
//            ->with('users', User::all())
//            ->with('title', 'Listado de usuarios');
        return view('users.index', compact('title', 'users'));
    }
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
    public function create()
    {
    	$role = Role::all();
        return view('user.create', ['role' => $role]);
    }
    public function store(Request $request)
    {
        
      	User::create([
            'name' => 		$request['name'],
            'email' => 		$request['email'],
            'password' => 	bcrypt($request['password']),
            'user_id' => 	$request['user_id'],
			'role_id' => 	$request['role_id']
			
		]);

        return 'creado';
    }


}