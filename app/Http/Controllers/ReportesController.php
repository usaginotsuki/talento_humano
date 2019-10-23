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
use PDF;

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

	public function horarioPorDocenteIndex()
	{
		$periodos = Periodo::codigoNombre()->get();
		$docentes = Docente::codigoNombre()->get();
		return view('reportes.horarioDocente', [
			'periodos' => $periodos->reverse(),
			'docentes' => $docentes
		]);

	}

	public function horarioPorDocentePost(Request $request)
	{
		$periodoId = $request->input('periodo');
		$docenteId = $request->input('docente');
		$periodos = Periodo::codigoNombre()->get();
		$docentes = Docente::codigoNombre()->get();
		$profesor = Docente::nombreDocente($docenteId)->get();
		
		$count = Horario::obtenerHorarioPorPeriodo($periodoId)->count();
		$horario = Horario::obtenerHorarioPorPeriodo($periodoId)->first();
		$materias = Materia::obtenerMateriaPorDocente($periodoId, $docenteId)->get();
		for ($x = 1; $x <= 13; $x++) {
			foreach ($materias as $mat) {
				$docente = $horario->laboratorio->LAB_NOMBRE;
				if ($horario['HOR_LUNES'.$x] == $mat->MAT_CODIGO) {
					$horario['HOR_LUNES'.$x] = $mat->MAT_ABREVIATURA;
					$horario['HOR_LUNES_DOC'.$x] = $docente ;
				}
				if ($horario['HOR_MATES'.$x] == $mat->MAT_CODIGO) {
					$horario['HOR_MATES'.$x] = $mat->MAT_ABREVIATURA;
					$horario['HOR_MATES_DOC'.$x] = $docente ;
				}
				if ($horario['HOR_MIERCOLES'.$x] == $mat->MAT_CODIGO) {
					$horario['HOR_MIERCOLES'.$x] = $mat->MAT_ABREVIATURA;
					$horario['HOR_MIERCOLES_DOC'.$x] = $docente ;
				}
				if ($horario['HOR_JUEVES'.$x] == $mat->MAT_CODIGO) {
					$horario['HOR_JUEVES'.$x] = $mat->MAT_ABREVIATURA;
					$horario['HOR_JUEVES_DOC'.$x] = $docente ;
				}
				if ($horario['HOR_VIERNES'.$x] == $mat->MAT_CODIGO) {
					$horario['HOR_VIERNES'.$x] = $mat->MAT_ABREVIATURA;
					$horario['HOR_VIERNES_DOC'.$x] = $docente ;
				}
			}
		}
		print($count);
		return view('reportes.horarioDocente', [
			'periodos' => $periodos->reverse(),
			'docentes' => $docentes,
			'count' => $count,
			'profesor' => $profesor,
			'horario' => $horario
		]);
	}

	public function hojaControl()
	{
		# code...
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
        return $pdf->scream('MateriasporCarrera.pdf');

	}
}
