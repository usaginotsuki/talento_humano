<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model {

	protected $table = 'campus';
	protected $primaryKey = 'CAM_CODIGO';
	protected $fillable = ['CAM_NOMBRE'];
	public $timestamps = false;

}
