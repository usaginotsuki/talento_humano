<?php namespace SGlab\Http\Controllers;

use SGlab\Http\Requests;
use SGlab\Http\Controllers\Controller;
use SGlab\Periodo;

use SGlab\Periodo;

use Illuminate\Http\Request;

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

	public function crear()
	{
		return view('periodo.create');
	}
	public function guardar(Request $request)
	{
<<<<<<< HEAD
		   Periodo::create([
			'PER_NOMBRE' => $request['per_nombre'], 
			'PER_ESTADO' => $request['per_estado'],
			'PER_HORAS_ATENCION' => $request['per_horas_atencion'],
			'PER_FECHA_INICIO' => $request['per_fecha_inicio'],
			'PER_FECHA_FIN' => $request['per_fecha_fin']
=======
		Periodo::create([
			'PER_NOMBRE' => $request['PER_NOMBRE'], 
			'PER_ESTADO' => $request['PER_ESTADO'],
			'PER_HORAS_ATENCION' => $request['PER_HORAS_ATENCION'],
			'PER_FECHA_INICIO' => $request['PER_FECHA_INICIO'],
			'PER_FECHA_FIN' => $request['PER_FECHA_FIN']
>>>>>>> 391c83f297fa6f9b73cb5177f68affdb9bbc88e5
		]);

		return view('periodo.success', ['title' => 'Periodo registrado!', 'subtitle' => 'El registro del periodo acádemico se ha realizado con éxito.']);
	}
	public function editar($id)
	{
		$periodo = Periodo::find($id);
		return view('periodo.update', ['periodo' => $periodo]);
	}
<<<<<<< HEAD
	public function delete($PER_CODIGO)
	{
		return view('periodo.delete');
		// Periodo::destroy($PER_CODIGO);
		// return view('periodo.success', ['title' => 'Periodo Eliminado!', 'subtitle' => 'El periodo fue eliminado.']);
=======
	public function actualizar(Request $request)
	{
		$periodo = Periodo::find($request['PER_CODIGO']);
		$periodo->fill($request->all());
		$periodo->save();

		return view('periodo.success', ['title' => 'Periodo actualizado!', 'subtitle' => 'La actualización del periodo acádemico se ha realizado con éxito.']);
	}
	public function eliminar($id)
	{
		$periodo = Periodo::find($id);
		return view('periodo.delete', ['periodo' => $periodo]);
	}
	public function eliminado(Request $request)
	{
		Periodo::destroy($request['PER_CODIGO']);
		return view('periodo.success', ['title' => 'Periodo eliminado!', 'subtitle' => 'La eliminación del periodo acádemico se ha realizado con éxito.']);
>>>>>>> 391c83f297fa6f9b73cb5177f68affdb9bbc88e5
	}
}
