<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\EventoOcacional;
use App\laboratorio;
use App\materia;
use App\docente;
use App\Quotation;
use DB;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class EventoOcacionalController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$data = DB::select('select control.CON_CODIGO as  CON_CODIGO, laboratorio.LAB_NOMBRE as LAB_NOMBRE, materia.MAT_NOMBRE as MAT_NOMBRE,materia.MAT_CODIGO as MAT_CODIGO, concat(docente.DOC_TITULO," ",docente.DOC_NOMBRES," ",docente.DOC_APELLIDOS)   as DOC_NOMBRE ,control.CON_DIA as CON_DIA,control.CON_HORA_ENTRADA as CON_HORA_ENTRADA , control.CON_HORA_SALIDA as CON_HORA_SALIDA, control.CON_NUMERO_HORAS as CON_NUMERO_HORAS, control.CON_NOTA as CON_NOTA  from control,materia,docente,laboratorio where control.LAB_CODIGO = laboratorio.LAB_CODIGO and control.MAT_CODIGO =materia.MAT_CODIGO and control.DOC_CODIGO = docente.DOC_CODIGO and CON_EXTRA=1 ;');
		return view('eventoocacional.index', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$laboratorios=laboratorio::all();
		$materias=materia::all();
		$docentes=docente::all();
		
		return view('eventoocacional.create')->with('laboratorios', $laboratorios)->with('materias', $materias)->with('docentes', $docentes);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * 
	 * @return Response
	 */
	public function store(Request $request)
	{
		EventoOcacional::create([
			'CON_DIA' => $request['CON_DIA'],
			'CON_EXTRA' => $request[NULL],
			'CON_HORA_ENTRADA' => $request['CON_HORA_ENTRADA'],
			'CON_HORA_SALIDA' => $request['CON_HORA_SALIDA'],
			'CON_LAB_ABRE' => $request[NULL],
			'CON_HORA_ENTRADA_R' => $request[NULL],
			'CON_REG_FIRMA_ENTRADA' => $request[NULL],
			'CON_HORA_SALIDA_R' => $request[NULL],
			'CON_REG_FIRMA_SALIDA' => $request[NULL],
			'CON_LAB_CIERRE' => $request[NULL],
			'CON_OBSERVACIONES' => $request[NULL],
			'CON_NUMERO_HORA' => $request['CON_NUMERO_HORA'],
			'CON_NOTA' => $request['CON_NOTA'],
			'CON_EXTRA' => $request[NULL],
			'CON_GUIA' => $request[NULL],
			'GUI_CODIGO' => $request[NULL],
			'LAB_CODIGO' => $request['LAB_CODIGO'],
			'MAT_CODIGO' => $request['MAT_CODIGO'],
			'DOC_CODIGO' => $request['DOC_CODIGO'],
		]);
		
		return redirect('control')
			->with('title', 'Evento Ocacional registrado!')
			->with('subtitle', 'El registro del evento ocacional se ha realizado con éxito.');
	}

	

}
