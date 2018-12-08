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

Route::get('/', function () {
    return view('welcome');
});

Route::get('users/register','Auth\RegisterController@show');
Route::post('users/register','Auth\RegisterController@register');

Route::get('users/logout','Auth\LoginController@logout');

Route::get('users/login','Auth\LoginController@show');
Route::post('users/login','Auth\LoginController@login');

Route::group(array('prefix'=>'admin','namespace'=>'admin','middleware'=>'manager'), function(){
    Route::get('users', 'UserController@index');
    Route::get('users/{id}/edit','UserController@edit');
    Route::post('users/{id}/edit','UserController@update');

    Route::get('roles','RoleController@index');
    Route::get('roles/create','RoleController@create');
    Route::post('roles/create','RoleController@store');
});
