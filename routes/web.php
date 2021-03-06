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

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@index')->name('index');

Route::get('/portfolio', 'MainController@portfolio')->name('portfolio');

Route::get('/about', 'MainController@about')->name('about');

Route::get('/contact', 'MainController@contact')->name('contact');


//contact form
Route::post('/contact', 'MainController@contactPost')->name('contactPost');
