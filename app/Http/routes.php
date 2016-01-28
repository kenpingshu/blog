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

Route::get('/', 'Main@index');

Route::get('/article/{id}', 'Blog@showArticle')->where(['id' => '[0-9]+']);

Route::get('/about','About@show');

Route::get('/service','Service@show');

Route::get('/contact','Contact@show');
//Route::get('2015/12_test', 'Y2015\test_12\main@index');


