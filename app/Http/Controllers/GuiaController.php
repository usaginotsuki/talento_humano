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
}
