<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Noticia;
use App\Periodo;
use App\empresa;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Input;
use Image;

class NoticiaController extends Controller {

	//valida que este autenticado para acceder al controlador
	public function __construct()
    {
        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		$noticias = Noticia::All();
		return view('noticia.index', compact('noticias'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$periodo=Periodo::All();
		$empresas=empresa::All();
		return view('Noticia.create',["periodo"=>$periodo],["empresas"=>$empresas]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$file = Input::file('image');
		$random = str_random(10);
		$nombre = $random.'-'.$file->getClientOriginalName();
		$path = public_path('uploads/'.$nombre);
		$url = '/uploads/'.$nombre;
		$image = Image::make($file->getRealPath());
		Noticia::create([
			'EMP_CODIGO' => $request['EMP_CODIGO'], 
			'PER_CODIGO' => $request['PER_CODIGO'], 
			'NOT_NOMBRE' => $request['NOT_NOMBRE'], 
			'NOT_TITULO' => $request['NOT_TITULO'], 
			'NOT_DESCRIPCION' => $request['NOT_DESCRIPCION'],
			'NOT_FECHA_INICIO' => $request['NOT_FECHA_INICIO'],
			'NOT_IMAGEN' => $url,
			'NOT_FECHA_FIN' => $request['NOT_FECHA_FIN']
		]);
		$image->save($path);
		return redirect('noticia')
			->with('title','Noticia Registrado!')
			->with('subtitle','Se ha registrado correctamente La Noticia.');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$noticia =	Noticia::find($id);
		$periodo=Periodo::All();
		$empresas=empresa::All();
		return view("noticia.update", ["noticia"=>$noticia,"periodo"=>$periodo,"empresas"=>$empresas]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function update(Request $request)
	{
		
		$noticia =	Noticia::find( $request['NOT_CODIGO']);
		//
		$file = Input::file('image');
		$random = str_random(10);
		$nombre = $random.'-'.$file->getClientOriginalName();
		$path = public_path('uploads/'.$nombre);
		$url = '/uploads/'.$nombre;
		$image = Image::make($file->getRealPath());
		//
		$noticia->fill(
			[
			'EMP_CODIGO' => $request['EMP_CODIGO'], 
			'PER_CODIGO' => $request['PER_CODIGO'], 
			'NOT_NOMBRE' => $request['NOT_NOMBRE'], 
			'NOT_TITULO' => $request['NOT_TITULO'], 
			'NOT_DESCRIPCION' => $request['NOT_DESCRIPCION'],
			'NOT_FECHA_INICIO' => $request['NOT_FECHA_INICIO'],
			'NOT_IMAGEN' => $path,
			'NOT_FECHA_FIN' => $request['NOT_FECHA_FIN']
			]
		);
		$image->save($path);
		$noticia->save();
		return redirect('noticia')
			->with('title','Noticia actualizado!')
			->with('subtitle','Se han actualizado correctamente los datos de la noticia.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Noticia::destroy($id);
		return redirect('noticia')
			->with('title','Noticia eliminada!')
			->with('subtitle','Se ha eliminado correctamente la Noticia.');
	}

}
