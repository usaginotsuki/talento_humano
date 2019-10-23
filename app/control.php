<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Control extends Model {

	//
	protected $table = 'Control';
	protected $primaryKey = 'CON_CODIGO';
	//							1				2				3				   4					5			           6				      7				         8				   9			      10					11			  12		   13		  14		 15		      16         17            18        
	protected $fillable = ['CON_DIA', 'CON_HORA_ENTRADA', 'CON_HORA_SALIDA', 'CON_LAB_ABRE', 'CON_HORA_ENTRADA_R', 'CON_REG_FIRMA_ENTRADA', 'CON_HORA_SALIDA_R', 'CON_REG_FIRMA_SALIDA', 'CON_LAB_CIERRA','CON_OBSERVACIONES','CON_NUMERO_HORAS','CON_NOTA','CON_EXTRA','CON_GUIA','GUI_CODIGO','LAB_CODIGO','MAT_CODIGO','DOC_CODIGO'];
	public $timestamps = false;

	public function laboratorio()
    {
        return $this->belongsTo('App\laboratorio', 'LAB_CODIGO');
	}
	
	public function materia()
    {
        return $this->belongsTo('App\Materia', 'MAT_CODIGO');
	}
	
	public function docente()
    {
        return $this->belongsTo('App\docente', 'DOC_CODIGO');
    }
}
