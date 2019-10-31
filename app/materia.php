<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model {

	protected $table = 'materia';
	protected $primaryKey = 'MAT_CODIGO';
	protected $fillable = ['PER_CODIGO','DOC_CODIGO','CAR_CODIGO','MAT_NRC','MAT_NOMBRE','MAT_CREDITOS','MAT_NUM_EST','MAT_ABREVIATURA','MAT_CODIGO_BANNER','MAT_NIVEL','MAT_OCACIONAL'];


     public function scopeMateriasx($query, $periodo, $carrera){
        return $query->where('PER_CODIGO',$periodo)->where('CAR_CODIGO', $carrera);
	}
	
	public function scopeMateriasxP($query, $periodo, $docente){
        return $query->where('PER_CODIGO',$periodo)->where('DOC_CODIGO', $docente);
    }


	public function periodos(){
        return $this->belongsTo('App\Periodo','PER_CODIGO');
    }
	public function docentes(){
		return $this->belongsTo('App\docente','DOC_CODIGO');
	}
	public function carreras(){
		return $this->belongsTo('App\Carrera','CAR_CODIGO');
	}
	public function guias() {
		return $this->hasMany('App\Guia');
	}

	public function scopeCodigoNombre($query) {
		return $query->select('MAT_CODIGO', 'MAT_NOMBRE', 'MAT_NRC');
	}
	
	public $timestamps = false;
}
