<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\EventoOcacional;
use App\laboratorio;
use App\materia;
use App\docente;

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
		$eventoocacionales = EventoOcacional::All();
		return view('eventoocacional.index', compact('eventoocacionales'));
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
	 * @param  Request  $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		EventoOcacional::create([
			'CON_DIA' => $request['CON_DIA'],
			'CON_EXTRA' => NULL,
			'CON_HORA_ENTRADA' => $request['CON_HORA_ENTRADA'],
			'CON_HORA_SALIDA' => $request['CON_HORA_SALIDA'],
			'CON_LAB_ABRE' => NULL,
			'CON_HORA_ENTRADA_R' => NULL,
			'CON_REG_FIRMA_ENTRADA' => NULL,
			'CON_HORA_SALIDA_R' => NULL,
			'CON_REG_FIRMA_SALIDA' => NULL,
			'CON_LAB_CIERRE' => NULL,
			'CON_OBSERVACIONES' => NULL,
			'CON_NUMERO_HORA' => $request['CON_NUMERO_HORA'],
			'CON_NOTA' => $request['CON_NOTA'],
			'CON_EXTRA' => NULL,
			'CON_GUIA' => NULL,
			'GUI_CODIGO' => NULL,
			'LAB_CODIGO' => $request['LAB_CODIGO'],
			'MAT_CODIGO' => $request['MAT_CODIGO'],
			'DOC_CODIGO' => $request['DOC_CODIGO'],
		]);
		
		return redirect('control')
			->with('title', 'Evento Ocacional registrado!')
			->with('subtitle', 'El registro del evento ocacional se ha realizado con éxito.');
	}

	

}
