<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ObjetoRecuperado extends Model {

	//
	protected $table = 'objeto_recuperado';
	protected $primaryKey = 'OBR_CODIGO';
	//							1				2				3		   	4			 5					6				7				8				9						10							11						12		13			14				
	protected $fillable = [ 'EMP_CODIGO', 'PER_CODIGO','OBR_NOMBRE','OBR_DESCRIPCION','OBR_FECHA_RECEPCION','OBR_IMAGEN','OBR_ESTADO','OBR_OBSERVACION','OBR_FECHA_ENTREGA'];
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
