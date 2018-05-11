<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname','lname', 'email', 'password', 'phone', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	 /**
     * The attributes that should be hidden for arrays.
     *
     * @return query
     */
	 public function scopeSearchByKeyword($query, $keyword)
	 {
		 if($keyword != "")
		 {
			 $query->where(function($query) use($keyword){
				 $query->where("fname","LIKE","%keyword%")
				       ->orWhere("lname","LIKE","%keyword%")
				       ->orWhere("email","LIKE","%keyword%")
				       ->orWhere("phone","LIKE","%keyword%");
			 });
		 }
		 return $query;
	 }
	
}
