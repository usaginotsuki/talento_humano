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

	public function hojaControl()
	{
		# code...
	}

	public function materiaPorCarrera()
	{
		$periodos = Periodo::codigoNombre()->get();
		$carreras = Carrera::codigoNombre()->get();

		$request=null;
		$materias=null;
		
		return view('reportes.materiaxcarrera', [
			'periodos' => $periodos,
			'carreras' => $carreras,
			'valores'=>$request,
			'materias'=>$materias
		]);
	}

    public function materiasPorCarreraPost(Request $request)
	{
		$periodos = Periodo::codigoNombre()->get();
		$carreras = Carrera::codigoNombre()->get();
	    $materias=Materia::materiasx($request['PER_CODIGO'],$request['CAR_CODIGO'])->get();
		
		return view('reportes.materiaxcarrera', [
			'periodos' => $periodos->reverse(),
			'carreras' => $carreras,
			'valores'=>$request,
			'materias'=>$materias
		]);
           
	}

	public function horarioPorDocente()
	{
		# code...
	}

	public function eventosOcasionales()
	{
		# code...
	}


}
