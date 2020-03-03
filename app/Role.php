<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {
	protected $table = 'roles';
	protected $primaryKey = 'id';
	protected $fillable = ['id','name','description'];
	public $timestamps = false;
	
	public function users(){
		return $this->hasMany('App\User');
	}

	public function accions(){
		return $this->belongsToMany('App\Item');
	}

	public function hasAccion($item){
		if( $this->accions->find($item)){
			return true;
		}
		return false;
	}

}
