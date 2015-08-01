<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',array('as'=>'home','uses'=>'HomeController@getIndex'));
Route::get('/post/{id}',array('as'=>'viewpost','uses'=>'HomeController@getView'));
Route::get('/cat/{category_id}',array('as'=>'viewcat','uses'=>'HomeController@getViewCat'));

// Login routes...
Route::get('auth/login',['as'=>'login','uses'=> 'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout',['as'=>'logout','uses'=>  'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register',['as'=>'registration','uses'=> 'Auth\AuthController@getRegister']);
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('home',['uses'=> 'HomeController@getIndex']);
