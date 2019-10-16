<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\empresa;

use App\institucion;

//use File;

class empresaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		//return 'this is empresa index';
		$empresa=empresa::all();
		//$this->set('empresas', $empresa);
		//return View::make('empresa.index')->with('empresas', $empresa);
		return view("empresa.index", ["empresas"=>$empresa]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

		$instituciones=institucion::all();
		return view('empresa.create',["instituciones"=>$instituciones]);

		return view('empresa.create');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

/*		$file = $request->file('EMP_IMAGEN_ENCABEZADO');
		\Storage::disk('local')->put('savefile.jpg',  \File::get($file));
		$public_path = public_path();
		$url = $public_path.'/storage/'.'savefile.jpeg';*/
		$estado = 0;
		if ($request['EMP_ESTADO'] === 'on') {
			$estado = 1;
		}



	

		empresa::create([
            'EMP_NOMBRE' => $request['EMP_NOMBRE'],
            'EMP_FIRMA_DEE' => $request['EMP_FIRMA_DEE'],
            'EMP_PIE_DEE' => $request['EMP_PIE_DEE'],
			'EMP_FIRMA_JEFE' => $request['EMP_FIRMA_JEFE'],
			'EMP_PIE_JEFE' => $request['EMP_PIE_JEFE'],
			'EMP_FIRMA_LAB' => $request['EMP_FIRMA_LAB'],
			'EMP_PIE_LAB' => $request['EMP_PIE_LAB'],

			'EMP_ESTADO' =>$estado,
			'EMP_RELACION_SUFICIENCIA' => $request['EMP_RELACION_SUFICIENCIA'],
			'EMP_IMAGEN_ENCABEZADO' =>  $request['EMP_IMAGEN_ENCABEZADO'],

			'EMP_ESTADO' => $request['EMP_ESTADO'],
			'EMP_RELACION_SUFICIENCIA' => $request['EMP_RELACION_SUFICIENCIA'],
			'EMP_IMAGEN_ENCABEZADO' => $request['EMP_IMAGEN_ENCABEZADO'],

			'EMP_IMAGEN_ENCABEZADO2' => $request['EMP_IMAGEN_ENCABEZADO2'],
			'EMP_AUX1' => $request['EMP_AUX1'],
			'EMP_AUX2' => $request['EMP_AUX2'],
			'INS_CODIGO' => $request['INS_CODIGO'],
		]);

		return redirect('empresa');
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
	public function search(Request $request)
	{
	
		return redirect('empresa');
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
		$empresa =	empresa::find($id);

		$instituciones=institucion::all();
		return view("empresa.edit", ["empresa"=>$empresa,"instituciones"=>$instituciones]);

		return view("empresa.edit", ["empresa"=>$empresa]);

		
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

		if ($request['EMP_ESTADO'] === 'on') {
			$request['EMP_ESTADO'] = 1;
		} else {
			$request['EMP_ESTADO'] = 0;
		}

		$empresa =	empresa::find( $request['EMP_CODIGO']);
		$empresa->EMP_NOMBRE = $request['EMP_NOMBRE'];
		$empresa->EMP_FIRMA_DEE = $request['EMP_FIRMA_DEE'];
		$empresa->EMP_PIE_DEE = $request['EMP_PIE_DEE'];
		$empresa->EMP_FIRMA_JEFE = $request['EMP_FIRMA_JEFE'];
		$empresa->EMP_FIRMA_LAB = $request['EMP_FIRMA_LAB'];
		$empresa->EMP_PIE_LAB = $request['EMP_PIE_LAB'];
		$empresa->EMP_ESTADO = $request['EMP_ESTADO'];
		$empresa->EMP_RELACION_SUFICIENCIA = $request['EMP_RELACION_SUFICIENCIA'];

		$empresa->EMP_IMAGEN_ENCABEZADO =$request['EMP_IMAGEN_ENCABEZADO'];
		$empresa->EMP_IMAGEN_ENCABEZADO2 = $request['EMP_IMAGEN_ENCABEZADO2'];
		$empresa->EMP_AUX1 = $request['EMP_AUX1'];
		$empresa->EMP_AUX2 = $request['EMP_AUX2'];
		$empresa->INS_CODIGO = $request['INS_CODIGO'];


		$empresa->save();
		return redirect('empresa');
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
		$empresa =	empresa::find($id);
		$empresa->delete();
		return redirect('empresa');
	}


}
