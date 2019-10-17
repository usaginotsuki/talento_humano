<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Parametro;
use App\Empresa;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use PDF;
use App;


class ParametroController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$parametros = Parametro::All();
		return view ('parametro.index',compact('parametros'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$empresas = Empresa::All();
		return view('parametro.create')->with('empresas', $empresas);
	}
	

	/**
	 * Store a newly created resource in storage.
	 *
	 *  @param  Request  $request
	 * @return Response
	 */

	public function store(Request $request)
	{
		if ($request['PAR_SINO'] === 'SI') {
			$request['PAR_SINO'] = 1;
		}else{
			$request['PAR_SINO'] = 0;
		}

		Parametro::create([
			'EMP_CODIGO' => 		$request['EMP_CODIGO'],
			'PAR_TODOS' => 			$request['PAR_TODOS'],
			'PAR_SINO' => 			$request['PAR_SINO'],
			'PAR_DESTINO' =>		$request['PAR_DESTINO'], 
			'DOC_CODIGO' =>			$request['DOC_CODIGO'],
			'DOC_MIESPE' =>			$request['DOC_MIESPE'],
			'DOC_CLAVE' =>			$request['DOC_CLAVE'],
			'LAB_CODIGO' =>			$request['LAB_CODIGO'],
			'CAR_CODIGO' =>			$request['CAR_CODIGO'], 
			'PER_CODIGO' =>			$request['PER_CODIGO'],
			'PAR_OBSERVACION' =>	$request['PAR_OBSERVACION'],
			'CON_CODIGO' =>			$request['CON_CODIGO'], 
			'MAT_CODIGO' =>			$request['MAT_CODIGO'], 
			'PAR_FECHA_INI' =>		$request['PAR_FECHA_INI'], 
			'PAR_FECHA_FIN' =>		$request['PAR_FECHA_FIN'],
			'CAM_CODIGO' =>			$request['CAM_CODIGO']
		]);

		return redirect('parametro')
			->with('title', 'Parametro registrado!')
			->with('subtitle', 'El registro del parametro realizado con éxito.');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{   
		$empresas = Empresa::All();
		$parametro = Parametro::find($id);

		return view('parametro.update', [
			'parametro' => $parametro,
			'empresas' => $empresas
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
		if ($request['PAR_SINO'] === 'SI') {
			$request['PAR_SINO'] = 1;
		} else {
			$request['PAR_SINO'] = 0;
		}

		$parametro = Parametro::find($request['PAR_CODIGO']);
		$parametro->fill($request->all());
		$parametro->save();
        
		return redirect('parametro')
			->with('title', 'Parametro actualizado!')
			->with('subtitle', 'La actualización del parametro se ha realizado con éxito.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Parametro::destroy($id);
		return redirect('parametro')
			->with('title', 'Parametro eliminado!')
			->with('subtitle', 'La eliminación del parametro se ha realizado con éxito.');
	}
}
