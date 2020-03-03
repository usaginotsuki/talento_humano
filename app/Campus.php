<?php namespace App;
/*
 * Sistema de Gestion de Laboratorios - ESPE
 *
 * Author: Barrera Erick - LLamuca Andrea
 * Revisado por: 
 *
 */
use Illuminate\Database\Eloquent\Model;

class Campus extends Model {

	protected $table = 'campus';
	protected $primaryKey = 'CAM_CODIGO';
	protected $fillable = ['CAM_NOMBRE'];

	public function laboratorios(){
		return $this->hasMany('App\Laboratorio');
	}

	public $timestamps = false;

}
