<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametro extends Model {

    protected $table = 'parametros';
	protected $primaryKey = 'PAR_CODIGO';
	protected $fillable = ['PAR_TODOS', 'EMP_CODIGO', 'PAR_SINO', 'PAR_DESTINO', 'DOC_CODIGO', 'DOC_MIESPE', 'DOC_CLAVE', 'LAB_CODIGO', 'CAR_CODIGO', 'PER_CODIGO', 'PAR_OBSERVACION', 'CON_CODIGO', 'MAT_CODIGO', 'PAR_FECHA_INI', 'PAR_FECHA_FIN', 'CAM_CODIGO'];

	public function empresas(){

	return $this->belongsTo('App\empresa','EMP_CODIGO');
		//en la tabla empresa va =
	//	return $this->hasMany('App\Parametro');

	}
	public $timestamps = false;
}
