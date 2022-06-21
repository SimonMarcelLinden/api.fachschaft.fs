<?php

namespace App\Http\Controllers\Drinks;

use App\Http\Controllers\Controller;
use App\Http\Resources\Drinks\Drink as DrinkResources;
use App\Models\Drink;

class DrinkController extends Controller {

	/**
	 *
	 */
	public function index() {
		$drinks = Drink::all();
		if($drinks)
			return responseFromCode(201000, DrinkResources::collection($drinks));
		else
			return responseFromCode(202000);
	}

	public function show() {}
	public function store() {}
	public function update() {}
}
