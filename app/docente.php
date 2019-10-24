<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class docente extends Model {

	//
	protected $table = 'docente';
	protected $primaryKey = 'DOC_CODIGO';
	protected $fillable = ['DOC_CEDULA', 'DOC_MIESPE', 'DOC_NOMBRES', 'DOC_APELLIDOS', 'DOC_CORREO', 'DOC_CLAVE', 'DOC_TITULO'];
	public $timestamps = false;

	public function materias(){
		return $this->hasMany('App\materia');
	}

	public function controles(){
		return $this->hasMany('App\control');
	}
}
