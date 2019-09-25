<?php namespace SGlab\Http\Controllers;

use SGlab\Http\Requests;
use SGlab\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PeriodoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('periodo');
	}

	public function crear()
	{
		return view('periodo.create');
	}
	public function guardar(Request $request)
	{
		\SGlab\Periodo::create([
			'PER_NOMBRE' => $request['per_nombre'], 
			'PER_ESTADO' => $request['per_estado'],
			'PER_HORAS_ATENCION' => $request['per_horas_atencion'],
			'PER_FECHA_INICIO' => $request['per_fecha_inicio'],
			'PER_FECHA_FIN' => $request['per_fecha_fin']
		]);

		return view('periodo.success', ['title' => 'Periodo registrado!', 'subtitle' => 'El registro del periodo acádemico se ha realizado con éxito.']);
	}
	public function actualizar()
	{
		return view('periodo.update');
	}
	public function eliminar()
	{
		return "aqui esta";
	}
}
