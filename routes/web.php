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

Route::any('/login', function () {
    return view('auth.login');
});
Route::any('/register', function () {
    return view('auth.register');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'RouteController@homePage');
Route::get('/posts', 'RouteController@posts');
//Route::any('/{route}', 'RouteController@index')->where('route', '(.*)');;
