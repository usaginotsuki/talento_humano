<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class control extends Model {

	//
	protected $table = 'control';
	protected $primaryKey = 'CON_CODIGO';
	//							1				2				3				   4					5			           6				      7				         8				   9			      10					11			  12		   13		  14		 15		      16         17            18        
	protected $fillable = ['LAB_CODIGO', 'MAT_CODIGO', 'CON_DIA', 'CON_HORA_ENTRADA', 'CON_HORA_SALIDA', 'CON_LAB_ABRE', 'CON_HORA_ENTRADA_R', 'CON_REG_FIRMA_ENTRADA', 'CON_HORA_SALIDA_R', 'CON_REG_FIRMA_SALIDA', 'CON_LAB_CIERRA','CON_OBSERVACIONES','CON_NUMERO_HORAS', 'DOC_CODIGO', 'CON_NOTA','CON_EXTRA','CON_GUIA','GUI_CODIGO'];
	public $timestamps = false;

	public function laboratorio()
    {
        return $this->belongsTo('App\Laboratorio', 'LAB_CODIGO');
	}
	
	public function materia()
    {
        return $this->belongsTo('App\materia', 'MAT_CODIGO');
	}
	
	public function docente()
    {
        return $this->belongsTo('App\docente', 'DOC_CODIGO');
	}
	
	/*protected $dates = [
        'CON_DIA'
    ];*/

}
