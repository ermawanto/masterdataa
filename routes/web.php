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

$app->get('/',function(){
	return view('welcome');
});

$app->group(['namespace' => 'auth'], function($app){
	$app->get('/login', ['as'=>'login','uses'=>'Login@show']);
	$app->post('/login',['as'=>'toLogin','uses'=>'Login@toLogin']);
	$app->get('/register',['as'=>'register','uses'=>'Register@show']);
	$app->post('/register',['as'=>'toRegister','uses'=>'Register@toLogin']);
});

$app->get('customers',['uses' => 'CustomerController@index', 'as' => 'customers.index']);
$app->get('customers/create',['uses' => 'CustomerController@create','as'=>'customers.create']);
$app->get('customers/edit/{id}',['uses' => 'CustomerController@edit', 'as' => 'customers.edit']);

$app->get('api/customers','CustomerController@show');
$app->post('api/customers','CustomerController@saveCustomer');
$app->put('api/customers/{id}','CustomerController@updateCustomer');
$app->delete('api/customers/{id}','CustomerController@deleteCustomer');

$app->get('api/user','UserController@index');
$app->post('api/user','UserController@saveUser');
$app->put('api/user/{id}','UserController@updateUser');
$app->delete('api/user/{id}','UserController@deleteUser');

$app->get('material',['uses' => 'MaterialController@index', 'as' => 'material.index']);
$app->get('api/material','MaterialController@show');
$app->post('api/material','MaterialController@saveMaterial');
$app->put('api/material/{id}','MaterialController@updateMaterial');
$app->delete('api/material/{id}','MaterialController@deleteMaterial');

$app->get('plantsloc',['uses' => 'PlantslocController@index', 'as' => 'plantsloc.index']);
$app->get('api/plantsloc','PlantslocController@show');
$app->post('api/plantsloc','PlantslocController@savePlantsloc');
$app->put('api/plansloc/{id}','PlantslocController@updatePlantsloc');
$app->delete('api/plantsloc/{id}','PlantslocController@deletePlantsloc');

$app->get('wilayah',['uses' => 'WilayahController@index', 'as' => 'wilayah.index']);
$app->get('api/wilayah','WilayahController@show');
$app->post('api/wilayah','WilayahController@saveWilayah');
$app->put('api/wilayah/{id}','WilayahController@updateWilayah');
$app->delete('api/wilayah/{id}','WilayahController@deleteWilayah');
