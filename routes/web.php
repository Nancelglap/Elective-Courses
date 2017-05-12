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
Route::get('/', 'electiveController@devote');
Route::get('/elective', 'electiveController@devote');
Route::post('/elective', 'electiveController@store');
Route::get('/elective/index', 'electiveController@index');
Route::post('/elective/search', 'electiveController@search');
Route::get('/elective/search', 'electiveController@search');
Route::get('/elective/about', 'electiveController@about');


