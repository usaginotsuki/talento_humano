<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Hora extends Model {

	protected $table = 'hora';
	protected $primaryKey = 'HORA_CODIGO';
	//							1				2				3				4					5			6				7				8				9						10							11						12		13			14				
	protected $fillable = ['EMP_CODIGO', 'HORA_NOMBRE'];
	public $timestamps = false;
	
	public function empresa()
    {
        return $this->belongsTo('App\Empresa', 'EMP_CODIGO');
	}

}
