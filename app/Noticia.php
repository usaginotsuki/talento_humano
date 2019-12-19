<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model {

	//
	protected $table = 'noticia';
	protected $primaryKey = 'NOT_CODIGO';
	//							1				2				3		   	4			 5					6				7				8				9						10							11						12		13			14				
	protected $fillable = [ 'EMP_CODIGO', 'PER_CODIGO','NOT_TITULO','NOT_DESCRIPCION','NOT_FECHA_INICIO','NOT_IMAGEN','NOT_FECHA_FIN'];
	public $timestamps = false;
	
	public function Periodo()
    {
        return $this->belongsTo('App\Periodo', 'PER_CODIGO');
	}
	
	public function empresa()
    {
        return $this->belongsTo('App\empresa', 'EMP_CODIGO');
	}


}
