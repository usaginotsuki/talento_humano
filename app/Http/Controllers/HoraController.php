<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Hora;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class HoraController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$horas = Hora::All();
		return view('hora.index', compact('horas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('hora.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		Hora::create([
			'HORA_CODIGO' => $request['HORA_CODIGO'],
			'HORA_NOMBRE' => $request['HORA_NOMBRE'],
		]);
		return redirect('hora')
			->with('title','Hora creada!')
			->with('subtitle','Se ha creado correctamente la Hora.');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$hora = Hora::find($id);
		return view('hora.update', ['hora' => $hora]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function update(Request $request)
	{
		$hora = Hora::find($request['HORA_CODIGO']);
		$carrera->fill($request->all());
		$carrera->save();
		return redirect('hora')
			->with('title','Hora actualizada!')
			->with('subtitle','Se han actualizado correctamente los datos de la hora.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Hora::destroy($id);
		return redirect('hora')
			->with('title','Hora eliminada!')
			->with('subtitle','Se ha eliminado correctamente la hora.');
	}

}
