<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class laboratorio extends Model {

	//
	protected $table = 'laboratorio';
	protected $primaryKey = 'LAB_CODIGO';
	//							1				2			  3				4								
	protected $fillable = ['LAB_NOMBRE', 'LAB_CAPACIDAD', 'CAM_CODIGO', 'EMP_CODIGO'];
	public $timestamps = false;
	public function laboratorio()
    {
		//return $this->belongsTo('App\campus', 'CAM_CODIGO');
		//return $this->belongsTo('App\empresa', 'EMP_CODIGO');
    }
}
