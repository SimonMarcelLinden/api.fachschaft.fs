<?php

namespace App\Http\Controllers\Drinks;

use App\Http\Controllers\Controller;
use App\Http\Resources\Drinks\Category as CategoryResources;
use App\Models\Drinks\Category;

class CategoryController extends Controller {
	/**
	 *
	 */
	public function index() {
		$drinks = Category::all();
		if($drinks)
			return responseFromCode(201000, CategoryResources::collection($drinks));
		else
			return responseFromCode(202000);
	}

	public function show() {}
	public function store() {}
	public function update() {}
}
