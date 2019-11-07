<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Control;
use App\Docente;
use App\Laboratorio;
use App\Materia;

use Illuminate\Http\Request;
use DB;
use App\Quotation;

use Carbon\Carbon; 

class ControlController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$controles= $this->listar($request['CON_DIA']);
		return view('control.index', compact('controles'));
	}



	public function listar($fecha)
	{
		if($fecha==null){
			$fecha = getdate()["year"]."-".getdate()["mon"]."-".getdate()["mday"];
		}
		$controles = DB::select('select laboratorio.LAB_NOMBRE,Count(*) as REGISTROS,control.CON_DIA from laboratorio,control where laboratorio.LAB_CODIGO=control.LAB_CODIGO and control.CON_DIA="'.$fecha.'" group by laboratorio.LAB_NOMBRE;' );
		$controles["fecha"]=$fecha;
		return $controles;
	}

	public function saber_dia($nombredia) {
		$dias = array('DOMINGO','LUNES','MATES','MIERCOLES','JUEVES','VIERNES','SABADO');
		$fecha = $dias[date('N', strtotime($nombredia))];
		return $fecha;
	}
	
	public function generar(Request $request)
	{
		
		$CON_FECHA = $request['CON_DIA'];
		$dia=$this->saber_dia($CON_FECHA);
		$controles_guardados=DB::select('SELECT control.CON_CODIGO,control.CON_DIA FROM control WHERE control.CON_DIA="'.$CON_FECHA.'"');
		$mensaje="Ya existen registro de esa fecha";
		$accion='error';
		if(empty($controles_guardados)){
			$codigo_periodo=DB::select('SELECT periodo.PER_CODIGO FROM periodo WHERE "'.$CON_FECHA.'" BETWEEN periodo.PER_FECHA_INICIO AND periodo.PER_FECHA_FIN' );
			$codigo_periodo=$codigo_periodo[0]->PER_CODIGO;
			$opcional=" and materia.MAT_OCACIONAL=0";

			if($request['MAT_OCACIONAL']==1){
				$opcional="";
			}

			$controles=array();
			for($i=1;$i<13;$i++)
			{
				$aux_controles=DB::select('select materia.MAT_CODIGO, horario.HOR_HORA'.$i.' as HORA, horario.HOR_CODIGO, laboratorio.LAB_CODIGO, materia.DOC_CODIGO
				from materia, horario, laboratorio,periodo,docente
				where docente.DOC_CODIGO=materia.DOC_CODIGO and horario.PER_CODIGO=periodo.PER_CODIGO and periodo.PER_CODIGO=materia.PER_CODIGO  and horario.LAB_CODIGO=laboratorio.LAB_CODIGO and periodo.PER_CODIGO='.$codigo_periodo.' and horario.HOR_'.$dia.$i.'=materia.MAT_CODIGO'.$opcional );
				foreach ($aux_controles as $con)
				{
					$con->ENTRADA=preg_split("/-/",$con->HORA)[0];
					$con->SALIDA=preg_split("/-/",$con->HORA)[1];
					array_push($controles,$con);
				}
			}
			

			$aux=0;

			for ($i=0;$i<sizeof($controles);$i++)
			{
				$controles[$i]->CANT_HORAS=0;
				for ($j=0;$j<sizeof($controles);$j++){
					if($controles[$i]->MAT_CODIGO==$controles[$j]->MAT_CODIGO && $controles[$i]->LAB_CODIGO==$controles[$j]->LAB_CODIGO){
						$controles[$i]->CANT_HORAS+=1;
						if($controles[$i]->SALIDA==$controles[$j]->ENTRADA)
						{
							$controles[$j]->ENTRADA=$controles[$i]->ENTRADA;
						}
						if($controles[$j]->ENTRADA==$controles[$i]->ENTRADA){
							$controles[$i]->SALIDA=$controles[$j]->SALIDA;
						}
					}
				}
				$controles[$i]->HORA="";
			}
			$controles=array_unique($controles,SORT_REGULAR);
			
			foreach($controles as $con){
				DB::insert('insert into control (CON_DIA, CON_HORA_ENTRADA, CON_HORA_SALIDA, CON_NUMERO_HORAS,LAB_CODIGO, MAT_CODIGO, DOC_CODIGO, CON_EXTRA) values (?,?,?,?,?,?,?,?)', [$CON_FECHA,$con->ENTRADA,$con->SALIDA,$con->CANT_HORAS,$con->LAB_CODIGO,$con->MAT_CODIGO,$con->DOC_CODIGO,$request['MAT_OCACIONAL']]);
			}
			$accion='success';
			$mensaje="Registros Generados";
		}
		return redirect('control')->with('fecha',$CON_FECHA)->with($accion,$mensaje);
		
		
	}

	/**
	 * Show the form for creating a new resource.
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
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function search(Request $request)
	{
	
		return redirect('control');
		//
	}
	public function show($id)
	{
		
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
	public function consola(Request $request)
	{
		//
		$date = Carbon::now();
		$date = $date->format('Y-m-d');
		$control = Control::where('CON_DIA', $date)->get();
		//$control =DB::table('control')->where('CON_DIA','$date')->get();
		//print_r ($control);
		//$control = control::all();
		//$control = DB::select('SELECT * FROM control where CON_DIA = 2019-11-05');
		//$control = DB::select('SELECT * FROM control where CON_DIA = :CON_DIA', ['CON_DIA' => '$date']);
		return view("control.consola", ["controles"=>$control]);
		
	}
}
