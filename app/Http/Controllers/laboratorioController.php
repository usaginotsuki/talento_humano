<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Laboratorio;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class laboratorioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$laboratorios = LABORATORIO::paginate(9);
		return view('laboratorio.index', compact('laboratorios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('laboratorio.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
	Laboratorio::create([
			'LAB_NOMBRE' => $request['LAB_NOMBRE'], 
			'LAB_CAPACIDAD' => $request['LAB_CAPACIDAD'], 

			
		]);

		$laboratorio = Laboratorio::All();
		return redirect('laboratorio')->with('title', 'laboratorio registrado!')->with('subtitle', 'El registro del laboratorio se ha realizado con éxito.');
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
		//
		$laboratorio= Laboratorio::find($id);
		return view('laboratorio.update', ['laboratorio' => $laboratorio]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		//
		$laboratorio = Laboratorio::find($request['LAB_CODIGO']);
		$laboratorio->fill($request->all());
		$laboratorio->save();
		return redirect('laboratorio')->with('title', 'laboratorio actualizado!')->with('subtitle', 'La actualización del laboratorio se ha realizado con éxito.');
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
		$laboratorio = Laboratorio::destroy($id);
		return redirect('laboratorio')->with('title', 'laboratorio ELIMINADO!')->with('subtitle', 'El registro del laboratorio se ha borrado con éxito.');
	}

}
