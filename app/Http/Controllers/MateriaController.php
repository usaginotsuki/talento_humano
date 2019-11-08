<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Materia;
use App\Periodo;
use App\Docente;
use App\Carrera;

use Illuminate\Http\Request;

class MateriaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$periodoActual=Periodo::where('PER_ESTADO','1')->first();
		$materias = Materia::select('MAT_CODIGO','DOC_CODIGO','CAR_CODIGO','MAT_NRC','MAT_NOMBRE')->where('PER_CODIGO',$periodoActual->PER_CODIGO)->get();
		foreach ($materias as $mat) {
			$carrera = Carrera::select('CAR_NOMBRE')->where('CAR_CODIGO',$mat->CAR_CODIGO)->first();
			$docente = Docente::select('DOC_NOMBRES','DOC_APELLIDOS')->where('DOC_CODIGO',$mat->DOC_CODIGO)->first();
			$mat->CAR_CODIGO=$carrera->CAR_NOMBRE;
			$mat->DOC_CODIGO=$docente->DOC_APELLIDOS.' '.$docente->DOC_NOMBRES;
			$mat->PER_CODIGO=$periodoActual->PER_NOMBRE;
		}
		return view ('materia.index',['materias' => $materias]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$periodos = Periodo::codigoNombre()->get();
		$docentes = Docente::codigoNombre()->get();
		$carreras = Carrera::codigoNombre()->get();
		return view('materia.create', [
			'periodos' => $periodos,
			'docentes' => $docentes,
			'carreras' => $carreras
		]);
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 *  @param  Request  $request
	 * @return Response
	 */

	public function store(Request $request)
	{
		if ($request['MAT_OCACIONAL'] === 'on') {
			$request['MAT_OCACIONAL'] = 1;
		} else {
			$request['MAT_OCACIONAL'] = 0;
		}
		$materiaValida = DB::table('materia')->where('MAT_NRC', $request->MAT_NRC)->where('PER_CODIGO', $request->PER_CODIGO)->get();
		if (count($materiaValida) === 1) {
			$periodos = Periodo::codigoNombre()->get();
			$docentes = Docente::codigoNombre()->get();
			$carreras = Carrera::codigoNombre()->get();
			return view('materia.create')
				->with('periodo',$periodos)
				->with('docente',$docentes)
				->with('carrera',$carreras)
				->with('PER_CODIGO',$request->PER_CODIGO)
				->with('DOC_CODIGO',$request->DOC_CODIGO)
				->with('CAR_CODIGO',$request->CAR_CODIGO)
				->with('MAT_NRC',$request->MAT_NRC)
				->with('MAT_NOMBRE',$request->MAT_NOMBRE)
				->with('MAT_CREDITOS',$request->MAT_CREDITOS)
				->with('MAT_NUM_EST',$request->MAT_NUM_EST)
				->with('MAT_ABREVIATURA',$request->MAT_ABREVIATURA)
				->with('MAT_CODIGO_BANNER',$request->MAT_CODIGO_BANNER)
				->with('MAT_NIVEL',$request->MAT_NIVEL)
				->with('MAT_OCACIONAL',$request->MAT_OCACIONAL)
				->with('mensajes','El NRC y el periodo ya estan asignados en otra materia, NO SE DEBE REPETIR');
		}else{
			Materia::create([
				'PER_CODIGO' => $request['PER_CODIGO'],
				'DOC_CODIGO' => $request['DOC_CODIGO'],
				'CAR_CODIGO' => $request['CAR_CODIGO'],
				'MAT_NRC' => $request['MAT_NRC'],
				'MAT_NOMBRE' => $request['MAT_NOMBRE'],
				'MAT_CREDITOS' => $request['MAT_CREDITOS'],
				'MAT_NUM_EST' => $request['MAT_NUM_EST'],
				'MAT_ABREVIATURA' => $request['MAT_ABREVIATURA'],
				'MAT_CODIGO_BANNER' => $request['MAT_CODIGO_BANNER'],
				'MAT_NIVEL' => $request['MAT_NIVEL'],
				'MAT_OCACIONAL'=> $request['MAT_OCACIONAL']             
			]);
			return redirect('materia')
				->with('title', 'Materia registrada!')
				->with('subtitle', 'El registro de la materia se ha realizado con éxito.');
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{   
		$periodos = Periodo::codigoNombre()->get();
		$docentes = Docente::codigoNombre()->get();
		$carreras = Carrera::codigoNombre()->get();
		$materia = Materia::find($id);
		return view('materia.update', [
			'materia' => $materia,
			'periodos' => $periodos,
			'docentes' => $docentes,
			'carreras' => $carreras
		]);
	}

	

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	
	public function update(Request $request)
	{
		$materiaValida = DB::table('materia')->where('MAT_NRC', $request->MAT_NRC)->where('PER_CODIGO', $request->PER_CODIGO)->first();
		$materia = Materia::find($request['MAT_CODIGO']); 
		if ($request['MAT_OCACIONAL'] === 'on') {
			$request['MAT_OCACIONAL'] = 1;
		} else {
			$request['MAT_OCACIONAL'] = 0;
		}
		if (count($materiaValida) === 1){
			if ($materiaValida->MAT_CODIGO === $materia->MAT_CODIGO){
			}else{
				$periodos = Periodo::codigoNombre()->get();
				$docentes = Docente::codigoNombre()->get();
				$carreras = Carrera::codigoNombre()->get();
				return view('materia.update', ['materia' => $materia])
		            ->with('periodos',$periodos)
					->with('docentes',$docentes)
					->with('carreras',$carreras)
		            ->with('PER_CODIGO',$request->PER_CODIGO)
		            ->with('DOC_CODIGO',$request->DOC_CODIGO)
		            ->with('CAR_CODIGO',$request->CAR_CODIGO)
					->with('MAT_NRC',$request->MAT_NRC)
					->with('MAT_NOMBRE',$request->MAT_NOMBRE)
					->with('MAT_CREDITOS',$request->MAT_CREDITOS)
					->with('MAT_NUM_EST',$request->MAT_NUM_EST)
					->with('MAT_ABREVIATURA',$request->MAT_ABREVIATURA)
					->with('MAT_CODIGO_BANNER',$request->MAT_CODIGO_BANNER)
					->with('MAT_NIVEL',$request->MAT_NIVEL)
					->with('MAT_OCACIONAL',$request->MAT_OCACIONAL)
					->with('mensajes','El NRC y el periodo ya estan asignados en otra materia, NO SE DEBE REPETIR');
			}
		}     
		$materia->fill($request->all());
		$materia->MAT_OCACIONAL=$request->MAT_OCACIONAL;
		$materia->save();
		return redirect('materia')
			->with('title', 'Materia actualizada!')
			->with('subtitle', 'La actualización de la materia se ha realizado con éxito.');			
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Materia::destroy($id);
		return redirect('materia')
			->with('title', 'Materia eliminada!')
			->with('subtitle', 'La eliminación de la materia se ha realizado con éxito.');
	}
}
