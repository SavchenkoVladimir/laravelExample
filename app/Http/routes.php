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

Route::get('/', 'SiteController@showHome');

Route::get('/home', 'SiteController@showHome');

Route::get('/workExamples', 'SiteController@showWorkExamples');

Route::get('/summury', 'SiteController@showSummary');

Route::get('/contacts', 'SiteController@contacts');

Route::post('/contacts', 'SiteController@contacts');
