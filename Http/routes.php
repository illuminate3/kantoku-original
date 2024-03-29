<?php


/*
|--------------------------------------------------------------------------
| Kantoku
|--------------------------------------------------------------------------
*/


// Resources
// Controllers

Route::get('welcome/kantoku', array(
	'uses'=>'KantokuController@welcome'
	));

// API DATA


/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() {

// Resources
// Controllers

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

// API DATA

});
// --------------------------------------------------------------------------
