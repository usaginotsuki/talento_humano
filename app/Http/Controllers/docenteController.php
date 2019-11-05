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
use App\Docente;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use DB;
use  App\Guia;
use  App\Materia;
use  App\Control;

class DocenteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$docentes = Docente::All();
		return view('docente.index', compact('docentes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('docente.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{



		$valida=Docente::where('DOC_CEDULA',$request['DOC_CEDULA'])->first();

        if(empty($valida)){

			Docente::create([
				'DOC_CEDULA' => $request['DOC_CEDULA'], 
				'DOC_MIESPE' => $request['DOC_MIESPE'],
				'DOC_NOMBRES' => $request['DOC_NOMBRES'],
				'DOC_APELLIDOS' => $request['DOC_APELLIDOS'],
				'DOC_CORREO' => $request['DOC_CORREO'],
				'DOC_CLAVE' => $request['DOC_CLAVE'],
				'DOC_TITULO' => $request['DOC_TITULO'],
				
			]);

			return redirect('docente')
			->with('title', 'Docente registrado!')
			->with('subtitle', 'El registro del docente se ha realizado con éxito.');
		}else{
            return view('docente.create')->with('mensajes','El numero de cedula ya le pertenece a otro Docente, NO SE DEBE REPETIR');

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
		//
		$docente= Docente::find($id);
		return view('docente.update', ['docente' => $docente]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{

        

        $docenteValida=Docente::where('DOC_CEDULA',$request['DOC_CEDULA'])->first();
		$docente = Docente::find($request['DOC_CODIGO']); 
		if (count($docenteValida) === 1){
			if ($docenteValida->DOC_CODIGO === $docente->DOC_CODIGO){
			}else{
                 return view('docente.update', ['docente' => $request])->with('mensajes','El numero de cedula ya le pertenece a otro Docente, NO SE DEBE REPETIR');
			}
		}

      $docente->fill($request->all());
		$docente->save();
		return redirect('docente')
			->with('title', 'Docente actualizado!')
			->with('subtitle', 'La información del docente se ha actualizado con éxito.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
        $validaGuia=Guia::where('DOC_CODIGO',$id)->first();
        $validaMateria=Materia::where('DOC_CODIGO',$id)->first();
        $validaControl=Control::where('DOC_CODIGO',$id)->first();
		if(empty($validaGuia) && empty($validaMateria) && empty($validaControl))
		{

          	$docente = Docente::destroy($id);
		    return redirect('docente')
			->with('title', 'Docente Eliminado!')
			->with('subtitle', 'El registro del docente se ha eliminado con éxito.');
		}else{

				return redirect('docente')
			->with('title', 'Docente NO Eliminado!')
			->with('subtitle', 'El registro del docente no se a eliminado correctamente, el docente tiene registros relacionados.');
		}
	}
}
