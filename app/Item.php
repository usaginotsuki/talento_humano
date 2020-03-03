<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {
	protected $table = 'item';
	protected $primaryKey = 'id';
	protected $fillable = ['id','name'];
	public $timestamps = false;
	
	public function roles(){
		return $this->belongsToMany('App\Rol');
	}
	

}
