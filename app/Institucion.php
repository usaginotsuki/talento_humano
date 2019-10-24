<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model {

	//
	protected $table = 'institucion';
	protected $primaryKey = 'INS_CODIGO';
	//							1				2				       3				4					 5							
	protected $fillable = ['INS_NOMBRE', 'INS_FIRMA_DIRECTOR', 'INS_PIE_DIRECTOR', 'INS_PIE_DIRECTOR2', 'INS_AUX'];
	public $timestamps = false;

}
