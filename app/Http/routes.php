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


$app->get('/', function () use ($app) {
    return $app->version();
});


$app ->group(['prefix'=> 'api' ,'namespace'=> 'App\Http\Controllers'], function($app){
    
    $app->get('users', 'BlogController@getUsers');
});


$app->get('/users', 'BlogController@index');
$app->post('/users', 'BlogController@add');
$app->get('/users/{id}', 'BlogController@show');
$app->put('/users/{id}', 'BlogController@update');
$app->patch('/users/{id}', 'BlogController@update');
$app->delete('/users/{id}', 'BlogController@delete');