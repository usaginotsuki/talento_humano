<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Materia;
use App\Periodo;
use App\docente;
use App\carrera;

use Illuminate\Http\Request;

class MateriaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$materias = Materia::select('MAT_CODIGO','PER_CODIGO','DOC_CODIGO','CAR_CODIGO','MAT_NRC','MAT_NOMBRE')
			->paginate(10);
		return view ('materia.index',compact('materias'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$periodo= periodo::All();
		$docente= docente::All();
		$carrera= carrera::All();
		return view('materia.create')
			->with('periodo',$periodo)
			->with('docente',$docente)
			->with('carrera',$carrera);
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
		if (count($materiaValida) === 1){
			$periodo= periodo::All();
		$docente= docente::All();
		$carrera= carrera::All();
		return view('materia.create')
            ->with('periodo',$periodo)
			->with('docente',$docente)
			->with('carrera',$carrera)
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
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{   
		$periodo= periodo::All();
		$docente= docente::All();
		$carrera= carrera::All();
		$materia = Materia::find($id);
		return view('materia.update', ['materia' => $materia])
			->with('periodo',$periodo)
			->with('docente',$docente)
			->with('carrera',$carrera);
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
				$periodo= periodo::All();
				$docente= docente::All();
				$carrera= carrera::All();
				return view('materia.update', ['materia' => $materia])
		            ->with('periodo',$periodo)
					->with('docente',$docente)
					->with('carrera',$carrera)
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
