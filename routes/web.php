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

//*Homepage
Route::get('/', 'HomeController@index')->name('home');


//*Comics list
Route::get('/index', 'ComicController@index')->name('comics_list');

//*New comics page
Route::get('/create', 'ComicController@create')->name('new_comic');

//*Comic details
Route::get('/show', 'ComicController@show')->name('show_comic');