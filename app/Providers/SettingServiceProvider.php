<?php

namespace App\Providers;

use App\Http\Resources\Settings\SettingCollection;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Cache\Factory;
use App\Models\Settings\Setting;

class SettingServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot(Factory $cache, Setting $settings) {
		$settings = $cache->remember('settings', 60, function() use ($settings){
			foreach (new SettingCollection($settings->all()) as $model) {
				/** Initialize relation model array */
				$relationObjects = [];
				$data[$model->title]['id'] 		= $model->id;
				$data[$model->title]['title'] 	= $model->title;
				$data[$model->title]['desc'] 	= $model->desc;
				$data[$model->title]['icon'] 	= $model->icon;

				// return $model;
				/** Iterate and make associative array */
				foreach ($model->elements as $option) {
					$relationObjects[$option->name]['id'] = $option->id;
					$relationObjects[$option->name]['name'] = $option->name; // name or whatever property you want
					$relationObjects[$option->name]['type'] = $option->tape;
					$relationObjects[$option->name]['label'] = $option->label;
					$relationObjects[$option->name]['rules'] = $option->rules;
					$relationObjects[$option->name]['message'] = $option->message;
				}

				/** Push 'relationObjects' to coresponding 'modelName' key */
				$data[$model->title]['elements'] = $relationObjects;

				return $data;
			}
        });

		config()->set('settings', $settings);
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register() {
		//
	}
}
