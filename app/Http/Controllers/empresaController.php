<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Empresa;
use App\Institucion;

use Illuminate\Http\Request;


class EmpresaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$empresa = Empresa::all();
		return view("empresa.index", ["empresas" => $empresa]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$instituciones = Institucion::all();
		return view('empresa.create', ["instituciones" => $instituciones]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$estado = 0;
		if ($request['EMP_ESTADO'] === 'on') {
			$estado = 1;
		}

		Empresa::create([
            'EMP_NOMBRE' => 				$request['EMP_NOMBRE'],
            'EMP_FIRMA_DEE' => 				$request['EMP_FIRMA_DEE'],
            'EMP_PIE_DEE' => 				$request['EMP_PIE_DEE'],
			'EMP_FIRMA_JEFE' => 			$request['EMP_FIRMA_JEFE'],
			'EMP_PIE_JEFE' => 				$request['EMP_PIE_JEFE'],
			'EMP_FIRMA_LAB' => 				$request['EMP_FIRMA_LAB'],
			'EMP_PIE_LAB' => 				$request['EMP_PIE_LAB'],
			'EMP_ESTADO' => 				$estado,
			'EMP_RELACION_SUFICIENCIA' => 	$request['EMP_RELACION_SUFICIENCIA'],
			'EMP_IMAGEN_ENCABEZADO' => 		$request['EMP_IMAGEN_ENCABEZADO'],
			'EMP_IMAGEN_ENCABEZADO2' => 	$request['EMP_IMAGEN_ENCABEZADO2'],
			'EMP_AUX1' => 					$request['EMP_AUX1'],
			'EMP_AUX2' => 					$request['EMP_AUX2'],
			'INS_CODIGO' => 				$request['INS_CODIGO'],
		]);

		return redirect('empresa');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$empresa =	Empresa::find($id);
		$instituciones = Institucion::all();
		
		return view("empresa.edit", [
			"empresa" => $empresa,
			"instituciones" => $instituciones
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
		if ($request['EMP_ESTADO'] === 'on') {
			$request['EMP_ESTADO'] = 1;
		} else {
			$request['EMP_ESTADO'] = 0;
		}

		$empresa =	empresa::find( $request['EMP_CODIGO']);
		$empresa->fill($request->all());
		$empresa->save();
		return redirect('empresa');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Empresa::destroy($id);
		return redirect('empresa');
	}
}
