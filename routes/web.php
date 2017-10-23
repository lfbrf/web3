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
    return view('welcome');
});

Auth::routes();
Route::group(['middleware'=>'auth'], function () {
	Route::get('permissions-all-users',['middleware'=>'check-permission:user|admin|superadmin','uses'=>'HomeController@allUsers']);
	Route::get('permissions-admin-superadmin',['middleware'=>'check-permission:admin|superadmin','uses'=>'HomeController@adminSuperadmin']);
	Route::get('permissions-superadmin',['middleware'=>'check-permission:superadmin','uses'=>'HomeController@superadmin']);
		//Route::resource('home', ['middleware'=>'check-permission:admin|superadmin','uses'=>'
		//HomeController']);
	
});
Route::group(['middleware' => ['check-permission:admin']], function() {
	Route::resource('articles','ArticleController');
});

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('articles','ArticleController');
	//Route::resource('articles', ['middleware'=>'check-permission:admin|superadmin','uses'=>'
	//	ArticleController']);