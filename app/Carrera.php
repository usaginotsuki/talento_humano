<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model {

	protected $table = 'carrera';
	protected $primaryKey = 'CAR_CODIGO';
	protected $fillable = ['CAR_NOMBRE', 'CAR_ABREVIATURA'];
	public $timestamps = false;

	public function materias() {
		return $this->hasMany('App\Materia');
	}
	
	public function scopeCodigoNombre($query) {
		return $query->select('CAR_CODIGO', 'CAR_NOMBRE');
	}
}
