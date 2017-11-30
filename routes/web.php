<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 



Route::view('/about', 'about');
Route::get('/buysalerent', 'HomeController@buysalerent')->name('buysalerent');
Route::get('/welcome', 'HomeController@welcome')->name('welcome');
  Route::get('/', 'HomeController@welcome')->name('welcome');
Auth::routes(); 
Route::get('/propertydetail', 'HomeController@propertydetail')->name('prop');
Route::group(['prefix' => 'admin','middleware' => ['check-permission:admin']], function() {
     Route::get('/','ImmobileController@index');
	Route::post('immobile/image-upload/{immobileId}','ImmobileController@uploadImages');
	Route::resource('immobile','ImmobileController');
	Route::resource('operations','OperationsController');
	Route::get('immobile-lists', ['as'=>'immobile-lists','uses'=>'ImmobileController@index']);
});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::resource('home','HomeController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/details', 'HomeController@details')->name('details');
