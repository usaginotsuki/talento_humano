<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
// aqui declaren todos los modelos que necesiten
use App\Horario;
use App\Materia;
use App\Laboratorio;
use App\Periodo;
use App\Docente;
use App\Carrera;
use App\Control;
use PDF;
use DB;
use Illuminate\Http\Request;

class ReportesController extends Controller {

	public function horarioPorSalasIndex()
	{
		$periodos = Periodo::codigoNombre()->get();
		$laboratorios = Laboratorio::codigoNombreCapacidad()->get();
		
		return view('reportes.horarioSala', [
			'periodos' => $periodos->reverse(),
			'laboratorios' => $laboratorios
		]);
	}
	public function horarioPorSalasPost(Request $request)
	{
		$periodoId = $request->input('periodo');
		$laboratorioId = $request->input('laboratorio');

		$periodos = Periodo::codigoNombre()->get();
		$laboratorios = Laboratorio::codigoNombreCapacidad()->get();
		$count = Horario::obtenerHorario($periodoId, $laboratorioId)->count();
		$horario = Horario::obtenerHorario($periodoId, $laboratorioId)->first();
		$materias = Materia::reporte($periodoId)->get();

		for ($x = 1; $x <= 13; $x++) {
			foreach ($materias as $mat) {
				$docente = $mat->docente->DOC_TITULO.' '.$mat->docente->DOC_NOMBRES.' '.$mat->docente->DOC_APELLIDOS;
				if ($horario['HOR_LUNES'.$x] == $mat->MAT_CODIGO) {
					$horario['HOR_LUNES'.$x] = $mat->MAT_ABREVIATURA;
					$horario['HOR_LUNES_DOC'.$x] = $docente;
				}
				if ($horario['HOR_MATES'.$x] == $mat->MAT_CODIGO) {
					$horario['HOR_MATES'.$x] = $mat->MAT_ABREVIATURA;
					$horario['HOR_MATES_DOC'.$x] = $docente;
				}
				if ($horario['HOR_MIERCOLES'.$x] == $mat->MAT_CODIGO) {
					$horario['HOR_MIERCOLES'.$x] = $mat->MAT_ABREVIATURA;
					$horario['HOR_MIERCOLES_DOC'.$x] = $docente;
				}
				if ($horario['HOR_JUEVES'.$x] == $mat->MAT_CODIGO) {
					$horario['HOR_JUEVES'.$x] = $mat->MAT_ABREVIATURA;
					$horario['HOR_JUEVES_DOC'.$x] = $docente;
				}
				if ($horario['HOR_VIERNES'.$x] == $mat->MAT_CODIGO) {
					$horario['HOR_VIERNES'.$x] = $mat->MAT_ABREVIATURA;
					$horario['HOR_VIERNES_DOC'.$x] = $docente;
				}
			}
		}

		return view('reportes.horarioSala', [
			'periodos' => $periodos->reverse(),
			'laboratorios' => $laboratorios,
			'count' => $count,
			'horario' => $horario
		]);
	}

	public function hojaControl(Request $request)
	{
		
		$controles= $this->listar($request['CON_DIA']);
		return view('reportes.hojaControl', compact('controles'));
	
	}

	public function listar($fecha){
		if($fecha==null){
			$fecha = getdate()["year"]."-".getdate()["mon"]."-".getdate()["mday"];
		}
        $controles = DB::select('SELECT @rownum:=@rownum+1 AS ORD, control.MAT_CODIGO,materia.MAT_ABREVIATURA,materia.MAT_NRC,laboratorio.LAB_NOMBRE,control.CON_HORA_ENTRADA,CON_HORA_SALIDA,docente.DOC_CODIGO, docente.DOC_NOMBRES, docente.DOC_APELLIDOS, docente.DOC_TITULO
		FROM (SELECT @rownum:=0) r, control,materia,laboratorio,docente
		where control.MAT_CODIGO=materia.MAT_CODIGO and control.LAB_CODIGO=laboratorio.LAB_CODIGO and materia.DOC_CODIGO=docente.DOC_CODIGO and control.CON_DIA="'.$fecha.'"
		order by control.CON_HORA_ENTRADA ASC;');
		$controles["fecha"]=$fecha;
		return $controles;
	}

	public function materiaPorCarrera()
	{
		# code...
	}

	public function horarioPorDocente()
	{
		# code...
	}

	public function eventosOcasionales()
	{
		# code...
	}

	public function materiaxcarrera()
	{

         $periodos= Periodo::All();
		$carreras = Carrera::All();
		$materias=null;
		$request=null;

		//$empr= $parametro->empresas->EMP_NOMBRE;
		return view('reportes.materiaxcarrera', ['periodos' => $periodos])->with('carreras',$carreras)->with('materias',$materias)->with('valores',$request);
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
            
         //$materias=Materia::select('SELECT * FROM materia WHERE PER_CODIGO= ? AND CAR_CODIGO=?',[$request['PER_CODIGO'],$request['CAR_CODIGO']]);
           // $materias= DB::table('materia')->where('PER_CODIGO', $request['PER_CODIGO'])->where('CAR_CODIGO', $request['CAR_CODIGO'])->get();
          $materias=Materia::materiasx($request['PER_CODIGO'],$request['CAR_CODIGO'])->get();

         $periodos= Periodo::All();
		$carreras = Carrera::All();

		//$pdf = PDF::loadView('reportes.materiaxcarrera', ['periodos' => $periodos])->with('carreras',$carreras)->with('materias',$materias)->with('valores',$request);



	  return view('reportes.materiaxcarrera', ['periodos' => $periodos])->with('carreras',$carreras)->with('materias',$materias)->with('valores',$request);//->with('pdf',$pdf);
	}



	public function pdf($per,$car)
	{ 
		 
        $materias=Materia::materiasx($per,$car)->get();

        $periodo=Periodo::find($per);
        $carrera=Carrera::find($car);

        $pdf = PDF::loadView('reportes.pdfmateriasxcarrera',['materias' => $materias , 'carrera' => $carrera, 'periodo'=>$periodo]);
        return $pdf->stream('MateriasporCarrera.pdf');

	}
	public function pdfcontrol($fecha)
	{ 
		 
        $controles = DB::select('select materia.MAT_NOMBRE,Count(*) as REGISTROS,control.CON_DIA from materia,control where materia.MAT_CODIGO=control.MAT_CODIGO and control.CON_DIA="'.$fecha.'" group by materia.MAT_NOMBRE;' );
		$controles["fecha"]=$fecha;
        $pdf = PDF::loadView('reportes.pdfcontrol',['controles' => $controles]);
        return $pdf->stream('ReporteControl.pdf');
	}
}
