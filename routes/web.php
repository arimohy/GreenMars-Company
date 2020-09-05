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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','MainController@index');

Route::get('/mayorista','MainController@mayoristaCliente');

Route::get('/distribuidor','MainController@mayoristaDistribuidor');

Route::get('/ormiga','MainController@ormiga');

Route::get('/aboutUs','MainController@aboutUs');

Route::get('/testimonials','MainController@testimonials');

Route::get('/contact','MainController@contact');

Route::get('/ourApps','MainController@ourApps');