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

Route::get('/', 'HomeController@index');
Route::get('dienstleistung', 'DienstleistungController@index');
Route::get('portfolio', 'PortfolioController@index');
Route::get('team', 'TeamController@index');
Route::get('kontakt', 'KontaktController@index');
Route::get('datenschutz', 'DatenschutzController@index');
Route::get('impressum', 'ImpressumController@index');

/*
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/