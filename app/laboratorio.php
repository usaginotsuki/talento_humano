<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class laboratorio extends Model {

	//
	protected $table = 'laboratorio';
	protected $primaryKey = 'LAB_CODIGO';
	protected $fillable = ['LAB_NOMBRE', 'LAB_CAPACIDAD'];
	public $timestamps = false;
}
