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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/seedtech', function () {
    return view('seedtech');
});

Route::get('/seedtech/seed', function () {
    return view('seedtech.seed');
});

Route::get('/tweets', 'TweetController@index')->name('tweets.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
