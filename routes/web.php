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

Route::get('/', function () {
    return view('public.index');
});

Route::get('/contact', function () {
    return view('public.contact');
});

Route::get('/about', function () {
    return view('public.about');
});

Route::get('/latest', 'PostController@index');

Route::get('/policy', function() {
	return view('public.policy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
