<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model {
	protected $table = 'laboratorio';
	protected $primaryKey = 'LAB_CODIGO';
	protected $fillable = ['LAB_NOMBRE','LAB_CAPACIDAD','CAM_CODIGO','EMP_CODIGO'];
	public $timestamps = false;

	public function horarios() {
		return $this->hasMany('App\Horario', 'LAB_CODIGO');
	}
}
