<?php namespace App\Http\Controllers;
/* 
 * Sistema de Gestion de Laboratorios - ESPE
 *
 * Author: Barrera Erick - LLamuca Andrea
 * Revisado por: 
 *
*/
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Campus;
use App\Laboratorio;

use Illuminate\Http\Request;
use DB;

class CampusController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$campus = Campus::All();
		return view('campus.index', compact('campus'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('campus.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$valida=Campus::where('CAM_NOMBRE',$request['CAM_NOMBRE'])->first();
		if(empty($valida)){
			Campus::create([
				'CAM_CODIGO' => $request['CAM_CODIGO'],
				'CAM_NOMBRE' => $request['CAM_NOMBRE']
			]);
			return redirect('campus')
				->with('title','Campus creado!')
				->with('subtitle','El registro de campus se ha realizado con éxito');
		}else{
            return view('campus.create')            	
				->with('CAM_NOMBRE',$request->CAM_NOMBRE)
            	->with('mensajes','El nombre del campus ya existe!, NO SE DEBE REPETIR');
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
		$campus = Campus::find($id);
		return view('campus.update', 
			['campus' => $campus]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$campusValida=Campus::where('CAM_NOMBRE',$request['CAM_NOMBRE'])->first();
		$campus = Campus::find($request['CAM_CODIGO']); 
		if (count($campusValida) === 1){
			if ($campusvalida->CAM_CODIGO === $campus->CAM_CODIGO){
			}else{
				return view('campus.update', ['campus' => $campus])            	
					->with('CAM_NOMBRE',$request->CAM_NOMBRE)
	            	->with('mensajes','El nombre del campus ya existe!, NO SE DEBE REPETIR');
	        }
		}  
		$campus->fill($request->all());
		$campus->save();
		return redirect('campus')
			->with('title','Campus actualizado!')
			->with('subtitle','Se han actualizado correctamente los datos del campus.');   
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$validaLaboratorio = Laboratorio::where('CAM_CODIGO',$id)->first();
		
		if (count($validaLaboratorio) === 1) {
			return redirect('campus')
				->with('title', 'Campus NO Eliminado!')
				->with('subtitle', 'El registro del campus no se a eliminado correctamente, el campus tiene registros relacionados.');
		}else{
			Campus::destroy($id);
			return redirect('campus')
				->with('title', 'Campus eliminado!')
				->with('subtitle', 'La eliminación del campus se ha realizado con éxito.');
		}
	}

}
