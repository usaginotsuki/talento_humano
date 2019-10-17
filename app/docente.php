<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class docente extends Model {

	//
	protected $table = 'docente';
	protected $primaryKey = 'DOC_CODIGO';
	public $timestamps = false;

	//							1				2			  3				4								
	protected $fillable = ['DOC_CEDULA', 'DOC_MIESPE', 'DOC_NOMBRES', 'DOC_APELLIDOS','DOC_CORREO','DOC_CLAVE','DOC_TITULO'];

	public function materias(){

		return $this->hasMany('App\Materia');

	}
}
