<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::resource('clausula','ClausulaController');
Route::get('clausula/destroy/{id}',['as' => 'clausula/destroy','uses'=>'ClausulaController@destroy']);
Route::post('clausula/search',['as' => 'clausula/search', 'uses'=>'ClausulaController@search']);	
/**/
Route::resource('supervisor','SupervisorController');
Route::get('supervisor/destroy/{id}',['as' => 'supervisor/destroy','uses'=>'SupervisorController@destroy']);
Route::post('supervisor/search',['as' => 'supervisor/search', 'uses'=>'SupervisorController@search']);	
/**/
Route::resource('cdp','CdpController');
Route::get('cdp/destroy/{id}',['as' => 'cdp/destroy','uses'=>'CdpController@destroy']);
Route::post('cdp/search',['as' => 'cdp/search', 'uses'=>'CdpController@search']);	

/**/
Route::resource('contrato','ContratoController');
Route::get('contrato/destroy/{id}',['as' => 'contrato/destroy','uses'=>'ContratoController@destroy']);
Route::post('contrato/search',['as' => 'contrato/search', 'uses'=>'ContratoController@search']);	

