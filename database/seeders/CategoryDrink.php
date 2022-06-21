<?php

namespace Database\Seeders;

use App\Models\Drink;
use App\Models\Drinks\Category;
use Illuminate\Database\Seeder;

class CategoryDrink extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		Category::create([
			'value' => 'Water',
			'slug' => 'water'
		]);
		Category::create([
			'value' => 'Alcoholic',
			'slug' => 'alcoholic'
		]);
		Category::create([
			'value' => 'Non-Alcoholic',
			'slug' => 'non-alcoholic'
		]);
	}
}
