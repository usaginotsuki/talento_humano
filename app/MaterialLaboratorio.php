<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialLaboratorio extends Model {
	protected $table = 'material_laboratorio';
	protected $primaryKey = 'MAT_CODIGO';
	protected $fillable = ['EMP_CODIGO', 'PER_CODIGO', 'MAT_CANTIDAD', 'MAT_DETALLE', 'MAT_OBSERVACION'];
	public $timestamps = false;

}
