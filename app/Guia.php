<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Guia extends Model {

	//
	protected $table = 'guia';
	protected $primaryKey = 'GUI_CODIGO';

	protected $fillable = ['DOC_CODIGO','MAT_CODIGO','LAB_CODIGO','PER_CODIGO','GUI_NUMERO','GUI_FECHA','GUI_TEMA','GUI_DURACION','GUI_OBJETIVO','GUI_EQUIPO_MATERIALES','GUI_TRABAJO_PREPARATORIO','GUI_ACTIVIDADES','GUI_RESULTADOS','GUI_CONCLUSIONES','GUI_RECOMENDACIONES','GUI_REFERENCIAS_BIBLIOGRAFICAS','GUI_ELABORADO','GUI_APROBADO','GUI_REGISTRADO','GUI_INTRODUCCION','GUI_COORDINADOR'];


	public function scopeGuiasx($query, $periodo, $docente){
        return $query->where('PER_CODIGO',$periodo)->where('DOC_CODIGO',$docente);
	}
	public function scopeGuiasxCarrera($query, $periodo){
        return $query->where('PER_CODIGO',$periodo);
    }

	public function docentes(){
		return $this->belongsTo('App\docente','DOC_CODIGO');
	}
	public function materias(){
		return $this->belongsTo('App\materia','MAT_CODIGO');
	}
	public function laboratorios(){
        return $this->belongsTo('App\laboratorio','LAB_CODIGO');
	}
	public function periodos(){
        return $this->belongsTo('App\Periodo','PER_CODIGO');
    }

	public function controles(){
		return $this->hasMany('App\control');
	}

	public $timestamps = false;

		public function scopeReporte($query, $materiaId) {
		return $query->select('DOC_CODIGO', 'MAT_CODIGO','LAB_CODIGO',
	'PER_CODIGO', 'GUI_NUMERO', 'GUI_FECHA', 'GUI_TEMA')
			->where('MAT_CODIGO', $materiaId);
	
    }

	public function scopeCodigoNombre($query, $guiaId) {
		return $query->select('GUI_CODIGO', 'GUI_FECHA', 
		'GUI_TEMA', 'GUI_DURACION', 'GUI_OBJETIVO', 
		'GUI_EQUIPO_MATERIALES', 'GUI_TRABAJO_PREPARATORIO', 
		'GUI_ACTIVIDADES', 'GUI_RESULTADOS', 'GUI_CONCLUSIONES', 
		'GUI_RECOMENDACIONES', 'GUI_REFERENCIAS_BIBLIOGRAFICAS', 
		'GUI_INTRODUCCION','GUI_COORDINADOR')
		->where('GUI_CODIGO',$guiaId);
	}
}