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

$app->get('/', function(){
	return view('welcome');
});

$app->group(['namespace' => 'auth'], function($app){
	$app->get('/login', ['as'=>'login','uses'=>'Login@show']);
	$app->post('/login',['as'=>'toLogin','uses'=>'Login@toLogin']);
});

$app->group(['namespace' => 'App\Http\Controller'], function ($app) {
	$api = 'api';
	// $app->get('api/pelanggan', 'CustomerController@index');
	$app->get($api . '/customer/{id}', ['uses' => 'CustomerController@detailCustomer', 'as' => 'detailCustomer']);
	$app->post($api . '/customer', ['uses' => 'CustomerController@saveCustomer', 'as' => 'saveCustomer']);
	$app->put($api . '/customer/{id}', ['uses' => 'CustomerController@updateCustomer', 'as' => 'updateCustomer']);
	$app->delete($api . '/customer/{id}', ['uses' => 'CustomerController@deleteCustomer', 'as' => 'deleteCustomer']);
});

$app->get('api/customers','CustomerController@index');
$app->post('api/customers','CustomerController@saveCustomer');
$app->put('api/customers/{id}','CustomerController@updateCustomer');
$app->delete('api/customers/{id}','CustomerController@deleteCustomer');

$app->get('api/user','UserController@index');
$app->post('api/user','UserController@saveUser');
$app->put('api/user/{id}','UserController@updateUser');
$app->delete('api/user/{id}','UserController@deleteUser');

$app->get('api/material','MaterialController@index');
$app->post('api/material','MaterialController@saveMaterial');
$app->put('api/material/{id}','MaterialController@updateMaterial');
$app->delete('api/material/{id}','MaterialController@deleteMaterial');

$app->get('api/plantsloc','PlantslocController@index');
$app->post('api/plantsloc','PlantslocController@savePlantsloc');
$app->put('api/plansloc/{id}','PlantslocController@updatePlantsloc');
$app->delete('api/plantsloc/{id}','PlantslocController@deletePlantsloc');

$app->get('api/wilayah','WilayahController@index');
$app->post('api/wilayah','WilayahController@saveWilayah');
$app->put('api/wilayah/{id}','WilayahController@updateWilayah');
$app->delete('api/wilayah/{id}','WilayahController@deleteWilayah');
