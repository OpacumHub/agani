<?php

Route::get('/', 'MakeUpController@index');

Route::get('/catalog', 'MakeUpController@catalog');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
