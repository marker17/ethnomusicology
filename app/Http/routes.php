<?php




use Yajra\Datatables\Facades\Datatables;


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

// Accessions
Route::get('accessions/search', 'AccessionController@search');
Route::resource('accessions', 'AccessionController');

// Category
Route::resource('categories', 'CategoryController', ['except' => ['create']]);

//Authentication Routes
Route::auth();
Route::get('logout', ['as' => 'logout', 'uses' =>'Auth\AuthController@logout']);
Route::post('login', ['as' => 'login', 'uses' => 'Auth\AuthController@login']);
Route::get('login', 'Auth\AuthController@showLoginForm');

// Registration routes
Route::post('register', ['as' => 'register', 'uses' =>'Auth\AuthController@register']);
Route::get('register', 'Auth\AuthController@showRegistrationForm');






Route::get('api/accessions', 'AccessionController@api');



	

