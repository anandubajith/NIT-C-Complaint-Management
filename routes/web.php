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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/complaint/create', 'ComplaintController@create');
Route::post('/complaint/create', 'ComplaintController@store');
Route::get('/complaint/{complaint}', 'ComplaintController@show');
Route::get('/complaint/{complaint}/edit', 'ComplaintController@edit');



Auth::routes();
Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');



