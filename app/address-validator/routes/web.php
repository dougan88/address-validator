<?php

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

//$router->get('/', function () use ($router) {
//    return $router->app->version();
//});

$router->post('validate-address[/{id}]', ['as' => 'address-validator', 'uses' => 'ApiController@validateAddress']);
$router->get('404', ['as' => '404', 'uses' => 'ApiController@errorResponse']);
$router->post('404', ['as' => '404', 'uses' => 'ApiController@errorResponse']);
