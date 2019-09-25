<?php namespace SGlab\Http\Controllers;

use SGlab\Http\Requests;
use SGlab\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PeriodoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$periodo = \SGlab\Periodo::All();
		return view('periodo',compact('periodo'));
	}

	public function FunctionName()
	{
		# code...
	}
}
