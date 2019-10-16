<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Hora extends Model {

	protected $table = 'hora';
	protected $primaryKey = 'HORA_CODIGO';
	protected $fillable = ['HORA_NOMBRE'];
	public $timestamps = false;

}
