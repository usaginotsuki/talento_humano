<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model {

	protected $table = 'carrera';
	protected $primaryKey = 'CAR_CODIGO';
	protected $fillable = ['CAR_NOMBRE', 'CAR_ABREVIATURA'];

	public function materias(){

		return $this->hasMany('App\Materia');

	}
	
	public $timestamps = false;
}
