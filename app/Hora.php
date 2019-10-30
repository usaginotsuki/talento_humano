<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Hora extends Model {
	protected $table = 'hora';
	protected $primaryKey = 'HORA_CODIGO';
	protected $fillable = ['EMP_CODIGO', 'HORA_NOMBRE'];
	public $timestamps = false;
	
	public function empresa()
    {
        return $this->belongsTo('App\Empresa', 'EMP_CODIGO');
	}

}
