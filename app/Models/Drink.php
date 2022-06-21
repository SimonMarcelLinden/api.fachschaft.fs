<?php

namespace App\Models;

use App\Models\Drinks\Category;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Drink extends Model {
	use HasFactory, SoftDeletes, Uuids;

	/**
	 * The attributes that should be mutated to dates.
	 *
	 * @var array
	 */
	protected $dates = ['deleted_at'];

	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	public $table = 'drinks';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];

	/**
	 * Return the price of the drink formatted in euros.
	 *
	 * @return string
	 */
	public function getPriceEuro() {
		return sprintf('%.2f€', $this->price);
	}

	/**
	 * Return the drinks of tjis category.
	 *
	 * @return string
	 */
	public function category(){
		return $this->belongsTo(Category::class);
	}
}
