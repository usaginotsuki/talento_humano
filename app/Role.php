<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {
	protected $table = 'cruge_authitemchild';
	protected $primaryKey = 'parent';
	protected $fillable = ['parent','child'];
	public $timestamps = false;
	
	public function users(){
		return $this->belongsToMany('App/User');
	}
}
