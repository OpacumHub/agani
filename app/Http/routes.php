<?php

Route::get('/', 'MakeUpController@feed');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
