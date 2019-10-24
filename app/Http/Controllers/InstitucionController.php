<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Institucion;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class InstitucionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		$institucion=Institucion::all();
		return view("institucion.index", ["instituciones"=>$institucion]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('institucion.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		Institucion::create([
            'INS_NOMBRE' => $request['INS_NOMBRE'],
            'INS_FIRMA_DIRECTOR' => $request['INS_FIRMA_DIRECTOR'],
            'INS_PIE_DIRECTOR' => $request['INS_PIE_DIRECTOR'],
			'INS_PIE_DIRECTOR2' => $request['INS_PIE_DIRECTOR2'],
			'INS_AUX' => $request['INS_AUX'],
		]);

		return redirect('institucion');
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
	public function search(Request $request)
	{
	
		return redirect('institucion');
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
		//
		$institucion =	Institucion::find($id);
		return view("institucion.edit", ["institucion"=>$institucion]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		//
		$institucion =	Institucion::find( $request['INS_CODIGO']);
		$institucion->INS_NOMBRE = $request['INS_NOMBRE'];
		$institucion->INS_FIRMA_DIRECTOR = $request['INS_FIRMA_DIRECTOR'];
		$institucion->INS_PIE_DIRECTOR = $request['INS_PIE_DIRECTOR'];
		$institucion->INS_PIE_DIRECTOR2 = $request['INS_PIE_DIRECTOR2'];
		$institucion->INS_AUX = $request['INS_AUX'];
		$institucion->save();
		return redirect('institucion');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$institucion =	Institucion::find($id);
		$institucion->delete();
		return redirect('institucion');
	}

}
