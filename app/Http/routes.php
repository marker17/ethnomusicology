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


Route::get('welcome', 'PagesController@getWelcome');

Route::get('contact', 'PagesController@getContact');

Route::get('josemaceda', 'PagesController@getJosemaceda');

Route::get('policies', 'PagesController@getPolicies');

//Route::get('collection', 'PagesController@getCollection');

Route::get('/', 'PagesController@getIndex');

Route::resource('accessions', 'AccessionController');




//category
Route::resource('categories', 'CategoryController', ['except' => ['create']]);



//collectioncontroller

Route::get('collections/{accession_no}', [
	'uses' => 'CollectionController@getSingle', 'as' => 'collections.single'	
]);



Route::get('collections', [
	'uses' => 'CollectionController@getIndex', 'as' => 'collections.index'
]);


Route::get('contact', 'PagesController@getContact');

Route::get('about', 'PagesController@getAbout');



Route::get('/', 'PagesController@getIndex');


