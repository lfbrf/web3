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



Route::get('/', function () {


    
});
Route::get('/buysalerent', 'HomeController@buysalerent')->name('buysalerent');
Route::get('/welcome', 'HomeController@welcome')->name('welcome');
  Route::get('/', 'HomeController@welcome')->name('welcome');
Auth::routes();
Route::group(['middleware'=>'auth'], function () {
	Route::get('permissions-all-users',['middleware'=>'check-permission:user|admin|superadmin','uses'=>'HomeController@allUsers']);
	Route::get('permissions-admin-superadmin',['middleware'=>'check-permission:admin|superadmin','uses'=>'HomeController@adminSuperadmin']);
	Route::get('permissions-superadmin',['middleware'=>'check-permission:superadmin','uses'=>'HomeController@superadmin']);
		//Route::resource('home', ['middleware'=>'check-permission:admin|superadmin','uses'=>'
		//HomeController']);
	
});
Route::get('/propertydetail', 'HomeController@propertydetail')->name('prop');
Route::group(['prefix' => 'admin','middleware' => ['check-permission:admin']], function() {
   

     Route::get('/','ImmobileController@home');
     

	Route::post('immobile/image-upload/{immobileId}','ImmobileController@uploadImages');
	Route::resource('immobile','ImmobileController');
	Route::resource('operations','OperationsController');
	Route::get('immobile-lists', ['as'=>'immobile-lists','uses'=>'ImmobileController@index']);

});



Route::resource('home','HomeController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/details', 'HomeController@details')->name('details');

//Route::resource('articles','ArticleController');
	//Route::resource('articles', ['middleware'=>'check-permission:admin|superadmin','uses'=>'
	//	ArticleController']);