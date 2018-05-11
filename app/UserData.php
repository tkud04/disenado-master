<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'address', 'city', 'state', 'zip', 'country'
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
				 $query->where("user_id","LIKE","%keyword%")
				       ->orWhere("address","LIKE","%keyword%")
				       ->orWhere("city","LIKE","%keyword%")
				       ->orWhere("state","LIKE","%keyword%");
				       ->orWhere("zip","LIKE","%keyword%");
				       ->orWhere("country","LIKE","%keyword%");
			 });
		 }
		 return $query;
	 }
}
