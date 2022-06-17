<?php

namespace App\Http\Resources\Settings;

use Illuminate\Http\Resources\Json\JsonResource;

class Option extends JsonResource {
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function toArray($request) {
		return [
			'id' => $this->id,
			'name' => $this->name,
			'type' => $this->type,
			'label' => $this->label,
			'rules'  => $this->rules,
			'message' => $this->message,
		];
	}
}
