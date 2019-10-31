<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Guia extends Model {
	protected $table = 'guia';
	protected $primaryKey = 'GUI_CODIGO';
	//

	protected $fillable = ['DOC_CODIGO', 'MAT_CODIGO','LAB_CODIGO',
	'PER_CODIGO', 'GUI_NUMERO', 'GUI_FECHA', 'GUI_TEMA', 'GUI_DURACION', 'GUI_OBJETIVO', 'GUI_EQUIPO_MATERIALES', 'GUI_TRABAJO_PREPARATORIO', 'GUI_ACTIVIDADES', 'GUI_RESULTADOS', 'GUI_CONCLUSIONES', 'GUI_RECOMENDACIONES', 'GUI_REFERENCIAS_BIBLIOGRAFICAS', 'GUI_ELABORADO', 'GUI_APROBADO', 'GUI_REGISTRADO', 'GUI_INTRODUCCION','GUI_COORDINADOR'];
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
