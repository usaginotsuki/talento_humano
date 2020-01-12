<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleSolicitud extends Model {

    protected $table = 'detalle_solicitud';
	protected $primaryKey = 'DETSOL_CODIGO';
	protected $fillable = ['DETSOL_CODIGO', 'SOL_CODIGO', 'DETSOL_CANTIDAD', 'DETSOL_DETALLE', 'DETSOL_OBSERVACION'];
	public $timestamps = false;


	/**
	 * Relación uno-uno entre Detalle Solicitud y Solicitud.
	 *
	 * @return Detalle Solicitud $this relacion uno-uno
	 */
	public function solicitud() {
		return $this->belongsTo('App\Solicitud','SOL_CODIGO');
	}
}
