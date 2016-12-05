<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('/post/{post}', 'HomeController@show');

Route::get('/profile', 'ProfileController@index')->name('profile');

Route::post('/profile', 'ProfileController@store');

Auth::routes();

/*Route::group(['prefix' => 'admin/', 'namespace' => 'Admin', 'middleware' => ['admin']], function(){
	include __DIR__. '/admin.php';
});*/



