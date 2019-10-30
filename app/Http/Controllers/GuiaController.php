<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Docente;
use App\Periodo;
use App\Materia;
use App\Horario;
class GuiaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function login()
	{
        return view ('guias.login');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function validar(Request $request)
	{
       
		$docentes=Docente::where('DOC_MIESPE',$request['usuario'])->where('DOC_CLAVE',$request['clave'])->first();
		if(empty($docentes)){
           return view ('guias.login')->with('title', 'Auntenticación incorrecta!')->with('subtitle', 'Ingrese el usuario y clave correctas.');
		}else {            
            \Session(['iddocente'=>$docentes ->DOC_CODIGO]);
            $periodo=Periodo::All()->last();
            $materias=Materia::where('DOC_CODIGO', $docentes ->DOC_CODIGO)->where('PER_CODIGO',$periodo->PER_CODIGO)->get();
			$count = Horario::obtenerHorarioPorPeriodo($periodo->PER_CODIGO)->count();
			$horario = Horario::obtenerHorarioPorPeriodo($periodo->PER_CODIGO)->first();
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
			return view('guias.index', [
				'periodo' => $periodo,
				'docente' => $docentes,
				'count' => $count
			])->with('materias',$materias)
			->with('horario',$horario);         
		}		
	}


	public function cerrarsession()
	{
       
           session()->forget('iddocente');
           return view ('guias.login');
	}

	public function index()
	{
       

        
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
	}

}
