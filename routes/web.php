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

Route::get('/{id?}', 'SbAdminController@index');
Route::get('orm/{id?}', 'SbAdminController@orm');
//Route::get('index.html', 'SbAdminController@index');
//Route::get('login.html', 'SbAdminController@login');
//Route::get('register.html', 'SbAdminController@register');
//Route::get('forgot-password.html', 'SbAdminController@forgotpassword');
//Route::get('404.html', 'SbAdminController@page404');
//Route::get('blank.html', 'SbAdminController@blank');
//Route::get('charts.html', 'SbAdminController@charts');
//Route::get('tables.html', 'SbAdminController@tables');
