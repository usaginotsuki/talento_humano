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

	public function create()
	{
		return view('periodo.create');
	}
	public function store(Request $request)
	{
		$estado = 0;
		if ($request['PER_ESTADO'] === 'on') {
			$estado = 1;
		}

		Periodo::create([
			'PER_NOMBRE' => $request['PER_NOMBRE'], 
			'PER_ESTADO' => $estado,
			'PER_HORAS_ATENCION' => $request['PER_HORAS_ATENCION'],
			'PER_FECHA_INICIO' => $request['PER_FECHA_INICIO'],
			'PER_FECHA_FIN' => $request['PER_FECHA_FIN']
		]);

		$periodos = Periodo::All();
		return redirect('periodo')->with('title', 'Periodo registrado!')->with('subtitle', 'El registro del periodo acádemico se ha realizado con éxito.');
	}
	public function edit($id)
	{
		$periodo = Periodo::find($id);
		return view('periodo.update', ['periodo' => $periodo]);
	}
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
		return redirect('periodo')->with('title', 'Periodo actualizado!')->with('subtitle', 'La actualización del periodo acádemico se ha realizado con éxito.');
	}
	public function destroy($id)
	{
		Periodo::destroy($id);
		return redirect('periodo')->with('title', 'Periodo eliminado!')->with('subtitle', 'La eliminación del periodo acádemico se ha realizado con éxito.');
	}
}
