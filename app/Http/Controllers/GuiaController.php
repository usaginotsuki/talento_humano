<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Periodo;
use App\Materia;
use App\Guia;
use DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class GuiaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function crearGuiaIndex(){
		$periodos = Periodo::codigoNombre()->get();
		return view('guia.crearGuia', [
			'periodos' => $periodos->reverse()
		]);
	}


	public function byPeriodoGet(Request $request,$id){
		if($request->ajax()){
			$data = Materia::obtenerMateriaPorDocente($id, '85')->get();
			//$data = Materia::reporte($id)->get();
			return response()->json($data);
		}
	}

	public function byGuiaGet(Request $request,$id){
		if($request->ajax()){
			$data = Guia::reporte($id)->get();
			return response()->json($data);
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function controlGuiaLaboratoriocreate()
	{
		
		return view('guia.controlGuiaLaboratoriocreate');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$guiaId=$request->input('guiaCombo');
		$guiass = Guia::codigoNombre($guiaId)->get();
		return view('guia.controlGuiaLaboratoriocreate', [
			'guiass' => $guiass,	
		]);
		
		Guia::controlGuiaLaboratoriocreate([
			'GUI_CODIGO' => $request['GUI_CODIGO'],
			'GUI_FECHA' => $request['GUI_FECHA'],
			'GUI_TEMA' => $request['GUI_TEMA'],
			'GUI_DURACION' => $request['GUI_DURACION'],
			'GUI_OBJETIVO' => $request['GUI_OBJETIVO'],
			'GUI_EQUIPO_MATERIALES' => $request['GUI_EQUIPO_MATERIALES'],
			'GUI_TRABAJO_PREPARATORIO' => $request['GUI_TRABAJO_PREPARATORIO'],
			'GUI_ACTIVIDADES' => $request['GUI_ACTIVIDADES'],
			'GUI_RESULTADOS' => $request['GUI_RESULTADOS'],
			'GUI_CONCLUSIONES' => $request['GUI_CONCLUSIONES'],
			'GUI_RECOMENDACIONES' => $request['GUI_RECOMENDACIONES'],
			'GUI_REFERENCIAS_BIBLIOGRAFICAS' => $request['GUI_REFERENCIAS_BIBLIOGRAFICAS'],
			'GUI_INTRODUCCION' => $request['GUI_INTRODUCCION'],
			'GUI_COORDINADOR' => $request['GUI_COORDINADOR'],
		]);
		return redirect('guia.controlGuiaLaboratoriocreate')
			->with('title','Guia creada!')
			->with('subtitle','Se ha creado correctamente la guia.');
	}

	

	

}
