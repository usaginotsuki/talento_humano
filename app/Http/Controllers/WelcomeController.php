<?php namespace App\Http\Controllers;

use App\ObjetoRecuperado;
use App\Noticia;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
    {
        $this->middleware('guest');
    }
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$objetos = ObjetoRecuperado::All();
		$objetos = DB::table('objeto_recuperado')
					->where('OBR_FECHA_ENTREGA', '=', '0000-00-00')
					->limit(3)
                    ->get();
		//$noticias = Noticia::All();
		$date = Carbon::now();
		$noticias = DB::table('noticia')
					->where("NOT_FECHA_INICIO","<=",$date)
					->where("NOT_FECHA_FIN",">=",$date)
					->limit(6)
                    ->get();
		return view('welcome',['objetos' => $objetos, 'noticias'=>$noticias]);
	}

	public function auth()
	{
		$objetos = ObjetoRecuperado::All();
		$noticias = Noticia::All();
		return view('auth.login',['objetos' => $objetos, 'noticias'=>$noticias]);
	}

}
