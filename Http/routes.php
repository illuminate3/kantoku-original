<?php

/*
|--------------------------------------------------------------------------
| Kantoku Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for the module.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('welcome/kantoku', array(
	'uses'=>'KantokuController@welcome'
	));

//Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
Route::group(['prefix' => 'admin'], function() {

	Route::pattern('id', '[0-9]+');
	Route::pattern('slug', '[a-z0-9-]+');

# controllers
//	Route::resource('modules', 'ModulesController');
	Route::get('modules/', array(
//		'as'=>'modules.edit',
		'uses'=>'ModulesController@index'
		));
	Route::get('modules/{slug}', array(
//		'as'=>'modules/{slug}',
		'uses'=>'ModulesController@edit'
		));
	Route::post('modules/{slug}', array(
		'as'=>'modules.update',
		'uses'=>'ModulesController@update'
		));

});
