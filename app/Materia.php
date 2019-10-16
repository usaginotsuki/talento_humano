<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model {

	protected $table = 'materia';
	protected $primaryKey = 'MAT_CODIGO';
	protected $fillable = ['PER_CODIGO','DOC_CODIGO','CAR_CODIGO','MAT_NRC','MAT_NOMBRE','MAT_CREDITOS','MAT_NUM_EST','MAT_ABREVIATURA','MAT_CODIGO_BANNER','MAT_NIVEL','MAT_OCACIONAL'];


     public function scopeMateriasx($query, $periodo, $carrera){
        return $query->where('PER_CODIGO',$periodo)->where('CAR_CODIGO', $carrera);
    }


	public function scopePeriodo($query, $periodo){
        return $query->where('PER_NOMBRE',$periodo);
    }
	public function docentes(){
		return $this->belongsTo('App\docente','DOC_CODIGO');
	}
	public function carreras(){
		return $this->belongsTo('App\Carrera','CAR_CODIGO');
	}
	
	public $timestamps = false;
}
