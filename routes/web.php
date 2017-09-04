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
    //Custom routes
    Route::name('sold.report')->get('sold/report','SoldController@report');
    Route::name('sold.graphic')->get('sold/graphics','SoldController@graphics');
    Route::name('sold.inventory')->get('sold/inventory','SoldController@inventory');
    Route::name('sold.smaller')->get('sold/smaller_sales','SoldController@smaller');
    Route::name('admin.calendar')->get('admin/calendar','AdminController@calendar');
    Route::name('admin.admin')->get('admin/admin','AdminController@admin');
    Route::name('admin.expenses')->get('admin/expense','AdminController@expense');
    Route::name('admin.debts')->get('admin/debt','AdminController@debt');
    Route::name('recipe.getter')->post('recipe/get','RecipeController@getter');
    Route::name('pdf')->get('pdf','PdfController@pdf');
    //General routes of CRUD
    Route::resource('/','HomeController');
    Route::resource('client','ClientController');
    Route::resource('sold','SoldController');
    Route::resource('sales','SalesController');
    Route::resource('arrangement','ArrangementController');
    Route::resource('admin','AdminController');
    Route::resource('calendar','CalendarController');
    Route::resource('ticket','TicketsController');
    Route::resource('recipe','RecipeController');
    Route::resource('product','ProductController');
    /*
    route general settings
    */
    Route::resource('changepassword','GeneralSettingsController');
  });
