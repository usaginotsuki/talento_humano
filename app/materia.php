<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class materia extends Model {

	//
	protected $table = 'materia';
	protected $primaryKey = 'MAT_CODIGO';
	//							1		  2		         3				   4			  5			           6				7				8			  9			   10			11		
	protected $fillable = ['MAT_NRC', 'MAT_NOMBRE', 'MAT_CREDITOS', 'MAT_NUM_EST', 'MAT_ABREVIATURA', 'MAT_CODIGO_BANNER', 'MAT_NIVEL', 'MAT_OCACIONAL', 'PER_CODIGO','DOC_CODIGO','CAR_CODIGO'];
	public $timestamps = false;
	
	public function controles(){
		return $this->hasMany('App\control');
	}

}
