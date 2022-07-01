<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use App\Http\Controllers\LoginController;

$router->get('/', 'HealthController@version');
$router->get('/health', 'HealthController@health');
$router->group(['prefix' => 'auth'], function () use ($router) {
    $router->post('register', 'RegisterController@register');
    $router->post('login/user', 'AuthController@authenticate');
});

// $router->group(['prefix' => 'categories'], function () use ($router) {
// 	$router->get('/', 		'Drinks\CategoryController@index');
// 	$router->get('/{id}', 	'Drinks\CategoryController@show');
// 	$router->post('/{id}', 'Drinks\CategoryController@store');
// 	$router->patch('/{id}', 'Drinks\CategoryController@update');
// });

// $router->group(['prefix' => 'drinks'], function () use ($router) {
// 	$router->get('/', 		'Drinks\DrinkController@index');
// 	$router->get('/{id}', 	'Drinks\DrinkController@show');
// 	$router->post('/{id}', 'Drinks\DrinkController@store');
// 	$router->patch('/{id}', 'Drinks\DrinkControllerr@update');
// });
