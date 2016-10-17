<?php

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

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);

Route::get('/categorias/{categorias}/delete', [
	'as' => 'categorias.delete',
	'uses' => 'CategoriaController@delete'
]);

Route::resource('categorias', 'CategoriaController');

Route::get('/register', 'Auth\AuthController@getRegister')->middleware('auth');
Route::post('/register', 'Auth\AuthController@postRegister')->middleware('auth');
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');
Route::get('/email', 'Auth\PasswordController@getEmail');
Route::post('/email', 'Auth\PasswordController@postEmail');
Route::get('/reset/{code}', 'Auth\PasswordController@getReset');
Route::post('/reset', 'Auth\PasswordController@postReset');
