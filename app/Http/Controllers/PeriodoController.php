<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Periodo;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PeriodoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$periodos = Periodo::All();
		return view('periodo.index', compact('periodos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('periodo.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$estado = 0;
		if ($request['PER_ESTADO'] === 'on') {
			$estado = 1;
		}
		$fechas = $request['PER_FECHAS'];
		list($start, $end) = preg_split('/ al /', $fechas);
		$start = date_create($start);
		$end = date_create($end);
		
		Periodo::create([
				'PER_NOMBRE' => 		$request['PER_NOMBRE'], 
				'PER_ESTADO' => 		$estado,
				'PER_HORAS_ATENCION' => $request['PER_HORAS_ATENCION'],
				'PER_FECHA_INICIO' => 	date_format($start,"Y/m/d H:i:s"),
				'PER_FECHA_FIN' => 		date_format($end,"Y/m/d H:i:s")
			]);
			
		return redirect('periodo')
			->with('title', 'Periodo registrado!')
			->with('subtitle', 'El registro del periodo acádemico se ha realizado con éxito.');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$periodo = Periodo::find($id);
		return view('periodo.update', ['periodo' => $periodo]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function update(Request $request)
	{
		if ($request['PER_ESTADO'] === 'on') {
			$request['PER_ESTADO'] = 1;
		} else {
			$request['PER_ESTADO'] = 0;
		}
		$periodo = Periodo::find($request['PER_CODIGO']);
		$periodo->fill($request->all());
		$periodo->save();
		return redirect('periodo')
			->with('title', 'Periodo actualizado!')
			->with('subtitle', 'La actualización del periodo acádemico se ha realizado con éxito.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Periodo::destroy($id);
		return redirect('periodo')
			->with('title', 'Periodo eliminado!')
			->with('subtitle', 'La eliminación del periodo acádemico se ha realizado con éxito.');
	}
}
