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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/editUser/{id}', 'HomeController@editUserView');
Route::post('/updateUser', 'HomeController@updateUser');

Route::get('/destroyUser/{id}', 'HomeController@destroyUser');
Route::get('/referalOwner', 'RefController@referalOwner');

Route::get('/auth/facebook', 'Auth\LoginController@facebook');
Route::get('/auth/facebook/callback', 'Auth\LoginController@handleProviderCallback');



