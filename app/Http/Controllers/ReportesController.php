<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Carrera;
use App\Periodo;
use App\Materia;
use DB;
use PDF;
class ReportesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function materiaxcarrera()
	{

         $periodos= Periodo::All();
		$carreras = Carrera::All();
		$materias=null;
		$request=null;

		//$empr= $parametro->empresas->EMP_NOMBRE;
		return view('reportes.materiaxcarrera', ['periodos' => $periodos])->with('carreras',$carreras)->with('materias',$materias)->with('valores',$request);
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
            
         //$materias=Materia::select('SELECT * FROM materia WHERE PER_CODIGO= ? AND CAR_CODIGO=?',[$request['PER_CODIGO'],$request['CAR_CODIGO']]);
           // $materias= DB::table('materia')->where('PER_CODIGO', $request['PER_CODIGO'])->where('CAR_CODIGO', $request['CAR_CODIGO'])->get();
          $materias=Materia::materiasx($request['PER_CODIGO'],$request['CAR_CODIGO'])->get();

         $periodos= Periodo::All();
		$carreras = Carrera::All();

		//$pdf = PDF::loadView('reportes.materiaxcarrera', ['periodos' => $periodos])->with('carreras',$carreras)->with('materias',$materias)->with('valores',$request);



	  return view('reportes.materiaxcarrera', ['periodos' => $periodos])->with('carreras',$carreras)->with('materias',$materias)->with('valores',$request);//->with('pdf',$pdf);
	}



	public function pdf($per,$car)
	{ 
		 
        $materias=Materia::materiasx($per,$car)->get();

        $periodo=Periodo::find($per);
        $carrera=Carrera::find($car);

        $pdf = PDF::loadView('reportes.pdfmateriasxcarrera',['materias' => $materias , 'carrera' => $carrera, 'periodo'=>$periodo]);
        return $pdf->scream('MateriasporCarrera.pdf');

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
