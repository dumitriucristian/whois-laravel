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

Route::get('/', "HomepageController@index");
Route::post('checkdomain', "HomepageController@checkDomain");
Route::get('cart','CartController@index');
Route::get('removeDomain/{domain}','CartController@removeDomain');
Route::post('order', "CartControler@registerOrer");

