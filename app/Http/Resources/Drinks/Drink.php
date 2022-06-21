<?php

namespace App\Http\Resources\Drinks;

use Illuminate\Http\Resources\Json\JsonResource;
use  App\Http\Resources\Drinks\Category as CategoryResource;

class Drink extends JsonResource {
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function toArray($request) {
		return [
			'id' 	=> $this->id,
			'name' 	=> $this->name,
			'price' => $this->price,
			'size' 	=> $this->size,
			'amount' => $this->amount,
			'category' => new CategoryResource( $this->category ),
		];
	}
}
