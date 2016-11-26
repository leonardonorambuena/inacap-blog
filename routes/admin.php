<?php

Route::get('/', function(){
	return "Panel de Administración";
});

Route::resource('/users', 'UsersController');