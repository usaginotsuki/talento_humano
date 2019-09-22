<?php namespace SGlab;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model {
	protected $table = 'periodo';
	protected $primaryKey = 'PER_CODIGO';
	public $timestamp = false;
	
}
