<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	protected $primaryKey = 'id';
	public $timestamps = false;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id','name', 'email', 'password','role_id','EMP_CODIGO'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password','remember_token'];

	public function role(){
		return $this->belongsTo('App\Role','role_id');
	}
	public function empresa(){
		return $this->belongsTo('App\Empresa','EMP_CODIGO');
	}

	//valida que el rol pueda hacer la accion y retorna True o false
	public function authorizeAccion($item){
		if($this->role->accions->where('name',$item)->first()){
				return true;
		}
		return false;
	}
	//valida que el rol pueda hacer la accion y manda un error si no tiene
	public function authorizeRole($item){
		if($this->role->accions->where('name',$item)->first()){
				return true;
		}
		abort(401, 'Accion no autorizada');
	}
}
