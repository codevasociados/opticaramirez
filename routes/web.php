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



/*
*Route login and logout - Authentication view & methods
*/
  Route::get( 'login',  ['as' => 'login','uses' => 'Auth\LoginController@showLoginForm']);
  Route::post('/login',  ['as' => '/login','uses' => 'Auth\LoginController@login']);
  Route::get('/logout',  ['as' => '/logout','uses' => 'Auth\LoginController@logout']);
  Route::get('logouttemp',['as' => 'logouttemp','uses' => 'AccessController@logout']);

/*
*Route middleware all users
*/
  Route::group(['middleware' => 'auth'], function (){
    Route::resource('/','HomeController');
    Route::resource('client','ClientController');
    Route::resource('sold','SoldController');
    /*
    route general settings
    */
    Route::resource('changepassword','GeneralSettingsController');
  });
