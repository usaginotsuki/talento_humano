<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$roles = Role::all();
        $title = 'Listado de roles';
        return view('role.index', [
            'title' => $title,
            'roles' => $roles
        ]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('role.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$role= Role::create([
			'name' => $request['name'],
			'description' => $request['description'],
		]);
		if($request['1'] === 'on') {
			$role->accions()->attach(1);
		}if($request['2'] === 'on') {
			$role->accions()->attach(2);
		}if($request['3'] === 'on') {
			$role->accions()->attach(3);
		}if($request['4'] === 'on') {
			$role->accions()->attach(4);
		}if($request['5'] === 'on') {
			$role->accions()->attach(5);
		}if($request['6'] === 'on') {
			$role->accions()->attach(6);
		}if($request['7'] === 'on') {
			$role->accions()->attach(7);
		}if($request['8'] === 'on') {
			$role->accions()->attach(8);
		}if($request['9'] === 'on') {
			$role->accions()->attach(9);
		}if($request['10'] === 'on') {
			$role->accions()->attach(10);
		}if($request['11'] === 'on') {
			$role->accions()->attach(11);
		}if($request['12'] === 'on') {
			$role->accions()->attach(12);
		}if($request['13'] === 'on') {
			$role->accions()->attach(13);
		}if($request['14'] === 'on') {
			$role->accions()->attach(14);
		}if($request['15'] === 'on') {
			$role->accions()->attach(15);
		}if($request['16'] === 'on') {
			$role->accions()->attach(16);
		}if($request['17'] === 'on') {
			$role->accions()->attach(17);
		}if($request['18'] === 'on') {
			$role->accions()->attach(18);
		}if($request['19'] === 'on') {
			$role->accions()->attach(19);
		}if($request['20'] === 'on') {
			$role->accions()->attach(20);
		}if($request['21'] === 'on') {
			$role->accions()->attach(21);
		}if($request['22'] === 'on') {
			$role->accions()->attach(22);
		}if($request['23'] === 'on') {
			$role->accions()->attach(23);
		}if($request['24'] === 'on') {
			$role->accions()->attach(24);
		}if($request['25'] === 'on') {
			$role->accions()->attach(25);
		}if($request['26'] === 'on') {
			$role->accions()->attach(26);
		}if($request['27'] === 'on') {
			$role->accions()->attach(27);
		}if($request['28'] === 'on') {
			$role->accions()->attach(28);
		}if($request['29'] === 'on') {
			$role->accions()->attach(29);
		}if($request['30'] === 'on') {
			$role->accions()->attach(30);
		}if($request['31'] === 'on') {
			$role->accions()->attach(31);
		}if($request['32'] === 'on') {
			$role->accions()->attach(32);
		}if($request['33'] === 'on') {
			$role->accions()->attach(33);
		}if($request['34'] === 'on') {
			$role->accions()->attach(34);
		}if($request['35'] === 'on') {
			$role->accions()->attach(35);
		}if($request['36'] === 'on') {
			$role->accions()->attach(36);
		}if($request['37'] === 'on') {
			$role->accions()->attach(37);
		}if($request['38'] === 'on') {
			$role->accions()->attach(38);
		}if($request['39'] === 'on') {
			$role->accions()->attach(39);
		}if($request['40'] === 'on') {
			$role->accions()->attach(40);
		}if($request['41'] === 'on') {
			$role->accions()->attach(41);
		}
		return redirect('role')
			->with('title', 'Role registrado!')
			->with('subtitle', 'El registro del role se ha realizado con éxito.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$role= Role::find($id);
		return view('role.update', [
			'role' => $role,
			]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$role= Role::find($request['id']);
		$role->fill($request->all());
		$acciones= [];
		if($request['1'] === 'on') {
			$acciones[]=1;
		}if($request['2'] === 'on') {
			$acciones[]=2;
		}if($request['3'] === 'on') {
			$acciones[]=3;
		}if($request['4'] === 'on') {
			$acciones[]=4;
		}if($request['5'] === 'on') {
			$acciones[]=5;
		}if($request['6'] === 'on') {
			$acciones[]=6;
		}if($request['7'] === 'on') {
			$acciones[]=7;
		}if($request['8'] === 'on') {
			$acciones[]=8;
		}if($request['9'] === 'on') {
			$acciones[]=9;
		}if($request['10'] === 'on') {
			$acciones[]=10;
		}if($request['11'] === 'on') {
			$acciones[]=11;
		}if($request['12'] === 'on') {
			$acciones[]=12;
		}if($request['13'] === 'on') {
			$acciones[]=13;
		}if($request['14'] === 'on') {
			$acciones[]=14;
		}if($request['15'] === 'on') {
			$acciones[]=15;
		}if($request['16'] === 'on') {
			$acciones[]=16;
		}if($request['17'] === 'on') {
			$acciones[]=17;
		}if($request['18'] === 'on') {
			$acciones[]=18;
		}if($request['19'] === 'on') {
			$acciones[]=19;
		}if($request['20'] === 'on') {
			$acciones[]=20;
		}if($request['21'] === 'on') {
			$acciones[]=21;
		}if($request['22'] === 'on') {
			$acciones[]=22;
		}if($request['23'] === 'on') {
			$acciones[]=23;
		}if($request['24'] === 'on') {
			$acciones[]=24;
		}if($request['25'] === 'on') {
			$acciones[]=25;
		}if($request['26'] === 'on') {
			$acciones[]=26;
		}if($request['27'] === 'on') {
			$acciones[]=27;
		}if($request['28'] === 'on') {
			$acciones[]=28;
		}if($request['29'] === 'on') {
			$acciones[]=29;
		}if($request['30'] === 'on') {
			$acciones[]=30;
		}if($request['31'] === 'on') {
			$acciones[]=31;
		}if($request['32'] === 'on') {
			$acciones[]=32;
		}if($request['33'] === 'on') {
			$acciones[]=33;
		}if($request['34'] === 'on') {
			$acciones[]=34;
		}if($request['35'] === 'on') {
			$acciones[]=35;
		}if($request['36'] === 'on') {
			$acciones[]=36;
		}if($request['37'] === 'on') {
			$acciones[]=37;
		}if($request['38'] === 'on') {
			$acciones[]=38;
		}if($request['39'] === 'on') {
			$acciones[]=39;
		}if($request['40'] === 'on') {
			$acciones[]=40;
		}if($request['41'] === 'on') {
			$acciones[]=41;
		}
		$role->accions()->sync($acciones);
		$role->save();
		return redirect('role')
			->with('title', 'Role actualizado!')
			->with('subtitle', 'la actualizacion del role se ha realizado con éxito.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		try {
			Role::destroy($id);
			return redirect('role')
				->with('title', 'Rol eliminado!')
				->with('subtitle', 'La eliminación de la Rol se ha realizado con éxito.');
		} catch (\Exception  $th) {
			return redirect('role')
			->with('title', 'Rol No se ha eliminado!')
			->with('subtitle', 'El rol tiene registros relacionados');
		}
		
	}

}
