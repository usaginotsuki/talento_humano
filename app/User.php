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
	protected $fillable = ['id','name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password','remember_token'];

	public function roles(){
		return $this->belongsToMany('App\Role');
	}

	//verifica que el usuario tenga el rol
	public function hasRole($role){
		if($this->roles()->where('name',$role)->first()){
			return true;
		}
		return false;
	}

	//verifica cuando un usuario tiene varios roles
	public function hasAnyRole($roles){
		if(is_array($roles)){
			foreach ($roles as $role) {
				return true;
			}
		}else{
			if($this->hasRole($roles)){
				return true;
			}
		}
		return false;
	}

	//valida si el usuario tiene autorizacion
	public function authorizeRoles($roles){
		if($this->hasAnyRole($roles))
			return true;
		abort(401, 'Accion no autorizada');

	}

	//valida que el rol pueda hacer la accion
	public function hasAccion($rol,$item){
		if ($this->roles->where('name',$rol)->first()->accions->where('name',$item)->first()) {
			return true;
		}
		return false;
	}
}
