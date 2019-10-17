<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class laboratorio extends Model {

	//
	protected $table = 'laboratorio';
	protected $primaryKey = 'LAB_CODIGO';
	//							1				2			  3				4								
	protected $fillable = ['LAB_NOMBRE', 'LAB_CAPACIDAD', 'CAM_CODIGO', 'EMP_CODIGO'];
	public $timestamps = false;
	
	public function horarios() {
		return $this->hasMany('App\Horario');
	}
	
	public function scopeCodigoNombreCapacidad($query)
	{
		return $query->select('LAB_CODIGO', 'LAB_NOMBRE', 'LAB_CAPACIDAD');
	}
}
