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

Route::get('/', 'HomePageController@getHomePage');
Route::get('/registration', 'UserController@getregistrationPage');
Route::get('/registration', 'UserController@postregistrationForm');


//{
 //   return view('welcome');
//});
