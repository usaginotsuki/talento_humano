<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Guia;
use App\Docente;
use App\Laboratorio;
use App\Materia;
use App\Periodo;
use App\Session;
use App\Horario;
use Illuminate\Http\Request;
use DB;
use App\Quotation;
class GuiaController extends Controller {
	public function listarGuias()
	{
			$materia="504";	
			$guias_terminadas=DB::select('select guia.GUI_REGISTRADO, guia.GUI_CODIGO,materia.MAT_ABREVIATURA, guia.GUI_NUMERO,guia.GUI_FECHA, guia.GUI_TEMA, laboratorio.LAB_NOMBRE from laboratorio,guia,materia where materia.MAT_CODIGO=guia.MAT_CODIGO and laboratorio.LAB_CODIGO=guia.LAB_CODIGO and guia.MAT_CODIGO='.$materia );
			$guias_pendientes=DB::select('select control.CON_DIA,control.CON_EXTRA,control.CON_HORA_ENTRADA, control.CON_HORA_SALIDA,control.CON_NUMERO_HORAS,control.CON_GUIA from control where control.MAT_CODIGO='.$materia);
			$pendietes=0;
			foreach ($guias_pendientes as $pen ){
				if ($pen->CON_GUIA!=1 & $pen->CON_EXTRA!=1 ){
					$pendietes++;
				}
			}
			return view('guia.guiaControl')->with('guias_terminadas', $guias_terminadas)->with('guias_pendientes', $guias_pendientes)->with('pendientes',$pendietes);
	}
	public function edit($id)
	{
		$guia= Guia::find($id);
		return view('guia.update', ['guia' => $guia]);
	}
	public function update(Request $request)
	{
		$guia = Guia::find($request['GUI_CODIGO']);
		$guia->fill($request->all());
		$guia->save();
		return redirect('guia')
			->with('title', 'Guia actualizada!')
			->with('subtitle', 'La información de la guia se ha actualizado con éxito.');
	}
	public function destroy($id)
	{
		$guia = Guia::destroy($id);
		DB::update('UPDATE CONTROL SET control.CON_GUIA=NULL WHERE control.CON_GUIA='.$id);
		return redirect('guia')
			->with('title', 'Guia Eliminado!')
			->with('subtitle', 'El registro de la Guia se ha eliminado con éxito.');
	}
	public function login()
	{
        return view ('guias.login');
	}
	public function validar(Request $request)
	{       
		$docentes=Docente::where('DOC_MIESPE',$request['usuario'])->where('DOC_CLAVE',$request['clave'])->first();
		if(empty($docentes)){
           return view ('guias.login')->with('title', 'Auntenticación incorrecta!')->with('subtitle', 'Ingrese el usuario y clave correctas.');
		}else {            
            \Session(['DOC_CODIGO'=>$docentes ->DOC_CODIGO]);
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
           session()->forget('DOC_CODIGO');
           return view ('guias.login');
	}
	public function index()
	{

	}
}