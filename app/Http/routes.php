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

Route::get('/', 'PagesController@getIndex');

Route::get('josemaceda', 'PagesController@getJosemaceda');

Route::get('policies', 'PagesController@getPolicies');

Route::get('contact', 'PagesController@getContact');

Route::get('about', 'PagesController@getAbout');















Route::resource('accessions', 'AccessionController');




//category
Route::resource('categories', 'CategoryController', ['except' => ['create']]);




Route::get('categories/{category_name}', [

	'uses' => 'CategoryController@getCategory', 'as' => 'categories.indexExternal'
]);


//collectioncontroller

Route::get('collections/{accession_no}', [
	'uses' => 'CollectionController@getSingle', 'as' => 'collections.single'	
]);



Route::get('collections', [
	'uses' => 'CollectionController@getIndex', 'as' => 'collections.index'
]);

//pagescontroller





