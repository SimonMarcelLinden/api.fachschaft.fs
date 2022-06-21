<?php

namespace Database\Factories;

use App\Models\Drink;
use App\Models\Drinks\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class DrinkFactory extends Factory {
	protected $model = Drink::class;

	public function definition(): array {
		$categories = Category::all()->pluck('id')->toArray();
		return [
			'name' => $this->faker->text(15),
			'price' => $this->faker->randomElement([1.0, 1.5]),
			'size' => $this->faker->randomElement(['0,2', '0,33', '0,5', '1,0', '1,5']),
			'amount' => $this->faker->numberBetween(10, 100),
			'category_id' => $this->faker->randomElement($categories),
		];
	}
}
