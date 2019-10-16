<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Campus;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CampusController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$campuses = Campus::All();
		return view('campus.index', compact('campuses'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('campus.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		Campus::create([
			'CAM_CODIGO' => $request['CAM_CODIGO'],
			'CAM_NOMBRE' => $request['CAM_NOMBRE']
		]);
		return redirect('campus')
			->with('title','Campus creada!')
			->with('subtitle','Se ha creado correctamente el campus.');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$campus = Campus::find($id);
		return view('campus.update', ['campus' => $campus]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function update(Request $request)
	{
		$campus = Campus::find($request['CAM_CODIGO']);
		$campus->fill($request->all());
		$campus->save();
		return redirect('campus')
			->with('title','Campus actualizada!')
			->with('subtitle','Se han actualizado correctamente los datos del campus.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Campus::destroy($id);
		return redirect('campus')
			->with('title','Campus eliminado!')
			->with('subtitle','Se ha eliminado correctamente el campus.');
	}

}
