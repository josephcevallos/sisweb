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

/*Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});
*/

Route::get('login', 'Auth\RegisterController@getLogin');
Route::post('login', ['as' =>'login', 'uses' => 'Auth\RegisterController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\RegisterController@getLogout']);
 
// Registration routes...
Route::get('register', 'Auth\RegisterController@getRegister');
Route::post('register', ['as' => 'auth/register', 'uses' => 'Auth\RegisterController@postRegister']);
Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::get('/home', function () {
    return view('home');
});
