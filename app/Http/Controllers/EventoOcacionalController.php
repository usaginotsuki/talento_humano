<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\EventoOcacional;
use App\laboratorio;
use App\materia;
use App\docente;
use App\Quotation;

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
