<?php namespace SGlab;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model {
	protected $table = 'periodo';
	protected $primaryKey = 'PER_CODIGO';
	protected $fillable = ['PER_NOMBRE', 'PER_ESTADO', 'PER_HORAS_ATENCION', 'PER_FECHA_INICIO', 'PER_FECHA_FIN'];
	public $timestamps = false;
}
