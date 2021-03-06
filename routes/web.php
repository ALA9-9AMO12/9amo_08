<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', 'RouteController@adminPage');

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'RouteController@homePage');

Route::get('/posts', 'PostController@index');
Route::any('/{route}', 'RouteController@index')->where('route', '(.*)');;

Route::resource('posts', 'PostController');
