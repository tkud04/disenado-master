<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductData extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['product_id', 'brand', 'category', 'description', 'colors'];
	
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
				 $query->where("product_id","LIKE","%keyword%")
				       ->orWhere("brand","LIKE","%keyword%")
				       ->orWhere("category","LIKE","%keyword%")
				       ->orWhere("description","LIKE","%keyword%");
			 });
		 }
		 return $query;
	 }

}
