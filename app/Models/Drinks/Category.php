<?php

namespace App\Models\Drinks;

use App\Models\Drink;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model {
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
	public $table = 'drinks_categories';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];

	/**
	 * Return the drinks of tjis category.
	 *
	 * @return string
	 */
	public function drinks(){
        return $this->hasMany(Drink::class);
	}
}
