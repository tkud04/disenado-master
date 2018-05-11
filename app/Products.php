<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'price', 'in_stock'];
	
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
				 $query->where("name","LIKE","%keyword%")
				       ->orWhere("price","<=","%keyword%");
			 });
		 }
		 return $query;
	 }

}
