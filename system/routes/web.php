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
    	return view('login');
	});

	Route::get('/admin', "AdminController@index");
	Route::get('/admin/user', "AdminController@user");

	Route::get('/pengguna', "PenggunaController@index");
	Route::post ('/pengguna/store', "PenggunaController@store");

	Route::get('/register', "RegisterController@index");
	Route::post ('/register/store', "RegisterController@store");

	Route::get('/artikel', "ArtikelController@index");
	Route::post ('/artikel/store', "ArtikelController@store");
	Route::get ('/artikel/{id}', "ArtikelController@show");
	Route::get ('/artikel/edit/{id}', "ArtikelController@edit");
	Route::post ('/artikel/update/{id}', "ArtikelController@update");
	Route::get ('/artikel/delete/{id}', "ArtikelController@delete");

	Route::get('/komen', "KomenController@index");
	Route::post ('/komen/store', "KomenController@store");
	Route::get ('/komen/{id}', "KomenController@show");
	Route::get ('/komen/edit/{id}', "KomenController@edit");
	Route::post ('/komen/update/{id}', "KomenController@update");
	Route::get ('/komen/delete/{id}', "KomenController@delete");


	Route::get ('/test', 'LoginController@test');
	Route::get ('login', 'LoginController@login')->name('login');
	Route::post ('login', 'LoginController@loginproses');
	Route::get ('logout', 'LoginController@logout'); 