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

// Pages
Route::get('/', 'PagesController@getIndex');
Route::get('josemaceda', 'PagesController@getJosemaceda');
Route::get('policies', 'PagesController@getPolicies');
Route::get('contact', 'PagesController@getContact');
Route::get('about', 'PagesController@getAbout');

// Accesions
Route::get('accessions/search', 'AccessionController@search');
Route::resource('accessions', 'AccessionController');

//Category
Route::resource('categories', 'CategoryController', ['except' => ['create']]);