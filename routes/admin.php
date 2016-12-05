<?php


Route::resource('/users', 'UserController');

Route::post('/users/restore', 'UserController@restore');

Route::resource('/posts', 'PostsController');

Route::resource('/tags', 'TagsController');

Route::resource('/skills', 'SkillsController');

Route::get('/getTags', 'TagsController@getTags');

Route::get('/getSkills', 'SkillsController@getSkills');

Route::get('/', 'DashController@index');
