<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\laboratorio;
use App\Campus;
use App\empresa;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class LaboratorioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$laboratorios = laboratorio::All();
		return view('laboratorio.index', compact('laboratorios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$campus=Campus::All();
		$empresas=empresa::All();
		return view('laboratorio.create',["campus"=>$campus],["empresas"=>$empresas]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
	laboratorio::create([
			'LAB_NOMBRE' => $request['LAB_NOMBRE'], 
			'LAB_CAPACIDAD' => $request['LAB_CAPACIDAD'], 
			'CAM_CODIGO' => $request['CAM_CODIGO'], 
			'EMP_CODIGO' => $request['EMP_CODIGO']
		]);

		return redirect('laboratorio')
			->with('title','Laboratorio creado!')
			->with('subtitle','Se ha creado correctamente el laboratorio.');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$laboratorios =	laboratorio::find($id);
		$campus=Campus::All();
		$empresas=empresa::All();
		return view("laboratorio.update", ["laboratorio"=>$laboratorios,"campus"=>$campus,"empresas"=>$empresas]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function update(Request $request)
	{
		$laboratorios =	laboratorio::find( $request['LAB_CODIGO']);
		$laboratorios->fill($request->all());
		$laboratorios->save();
		return redirect('laboratorio')
			->with('title','Laboratorio actualizado!')
			->with('subtitle','Se han actualizado correctamente los datos del laboratorio.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		laboratorio::destroy($id);
		return redirect('laboratorio')
			->with('title','Laboratorio eliminado!')
			->with('subtitle','Se ha eliminado correctamente el laboratorio.');
	}

}
