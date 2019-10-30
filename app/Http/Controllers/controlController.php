<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Control;
use App\Docente;
use App\Laboratorio;
use App\Materia;
use Carbon\Carbon; 

use Illuminate\Http\Request;

class ControlController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$control = Control::all();
		return view("control.index", ["controles" => $control]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function consola(Request $request)
	{
		//
		$date = Carbon::now();
		$date = $date->format('Y-m-d');

		$control = control::where('CON_DIA', $date)
			->get();

		//$control = control::all();
		
		return view("control.consola", ["controles"=>$control]);
	}

	/**
	 * Show the form for creating a new resource.
	 * Lo Siento
	 * @return Response
	 */
	public function create()
	{
		$laboratorios = Laboratorio::all();
		$materias = Materia::all();
		$docentes = Docente::all();
		//return view('control.create',["laboratorios"=>$laboratorios],["materias"=>$materias],["docentes"=>$docentes]);
		return view('control.create')->with('laboratorios', $laboratorios)->with('materias', $materias)->with('docentes', $docentes);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		Control::create([
            'CON_DIA' => $request['CON_DIA'],
			'CON_HORA_ENTRADA' => $request['CON_HORA_ENTRADA'],
			'CON_HORA_SALIDA' => $request['CON_HORA_SALIDA'],
			'CON_LAB_ABRE' => $request['CON_LAB_ABRE'],
			'CON_HORA_ENTRADA_R' => $request['CON_HORA_ENTRADA_R'],
			'CON_REG_FIRMA_ENTRADA' => $request['CON_REG_FIRMA_ENTRADA'],
			'CON_HORA_SALIDA_R' =>  $request['CON_HORA_SALIDA_R'],
			'CON_REG_FIRMA_SALIDA' => $request['CON_REG_FIRMA_SALIDA'],
			'CON_LAB_CIERRA' => $request['CON_LAB_CIERRA'],
			'CON_OBSERVACIONES' => $request['CON_OBSERVACIONES'],
			'CON_NUMERO_HORAS' => $request['CON_NUMERO_HORAS'],
			'CON_NOTA' => $request['CON_NOTA'],
			'CON_EXTRA' => $request['CON_EXTRA'],
			'CON_GUIA' => $request['CON_GUIA'],
			'GUI_CODIGO' => $request['GUI_CODIGO'],
			'LAB_CODIGO' => $request['LAB_CODIGO'],
			'MAT_CODIGO' => $request['MAT_CODIGO'],
			'DOC_CODIGO' => $request['DOC_CODIGO'],
		]);

		return redirect('control');
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
		$control = Control::find($id);
		$laboratorios = Laboratorio::all();
		$materias = Materia::all();
		$docentes = Docente::all();
		//return view("control.edit", ["control"=>$control,"laboratorios"=>$laboratorios,"materias"=>$materias,"docentes"=>$docentes]);
		return view('control.edit')->with('control', $control)->with('laboratorios', $laboratorios)->with('materias', $materias)->with('docentes', $docentes);
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
		$control = Control::find( $request['CON_CODIGO']);
		$control->CON_DIA = $request['CON_DIA'];
		$control->CON_HORA_ENTRADA = $request['CON_HORA_ENTRADA'];
		$control->CON_HORA_SALIDA = $request['CON_HORA_SALIDA'];
		$control->CON_LAB_ABRE = $request['CON_LAB_ABRE'];
		$control->CON_HORA_ENTRADA_R = $request['CON_HORA_ENTRADA_R'];
		$control->CON_REG_FIRMA_ENTRADA = $request['CON_REG_FIRMA_ENTRADA'];
		$control->CON_HORA_SALIDA_R = $request['CON_HORA_SALIDA_R'];
		$control->CON_REG_FIRMA_SALIDA = $request['CON_REG_FIRMA_SALIDA'];
		$control->CON_LAB_CIERRA =$request['CON_LAB_CIERRA'];
		$control->CON_OBSERVACIONES = $request['CON_OBSERVACIONES'];
		$control->CON_NUMERO_HORAS = $request['CON_NUMERO_HORAS'];
		$control->CON_NOTA = $request['CON_NOTA'];
		$control->CON_EXTRA = $request['CON_EXTRA'];
		$control->CON_GUIA = $request['CON_GUIA'];
		$control->GUI_CODIGO = $request['GUI_CODIGO'];
		$control->LAB_CODIGO = $request['LAB_CODIGO'];
		$control->MAT_CODIGO = $request['MAT_CODIGO'];
		$control->DOC_CODIGO = $request['DOC_CODIGO'];
		$control->save();
		return redirect('control');
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
		$control = Control::find($id);
		$control->delete();
		return redirect('control');
	}
}
