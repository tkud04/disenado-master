<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductData extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['product_id', 'brand', 'category', 'description', 'colors'];

}
