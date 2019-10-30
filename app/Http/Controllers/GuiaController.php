<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Guia;
use App\Docente;
use App\Laboratorio;
use App\Materia;
use App\Periodo;
use App\Session;

use Illuminate\Http\Request;
use DB;
use App\Quotation;

class GuiaController extends Controller {


	public function listarGuias()
	{
			//$materia = Session::get('materia');
			$materia="504";
			$guias_terminadas=DB::select('select guia.GUI_NUMERO,guia.GUI_FECHA, guia.GUI_TEMA, laboratorio.LAB_CODIGO from laboratorio,guia where laboratorio.LAB_CODIGO=guia.LAB_CODIGO and guia.MAT_CODIGO='.$materia );
			$guias_pendientes=DB::select('select control.CON_DIA,control.CON_EXTRA,control.CON_HORA_ENTRADA, control.CON_HORA_SALIDA,control.CON_NUMERO_HORAS,control.CON_GUIA from control where control.MAT_CODIGO='.$materia);
			return view('reportes.guiaControl')->with('guias_terminadas', $guias_terminadas)->with('guias_pendientes', $guias_pendientes);
	}


	
}
