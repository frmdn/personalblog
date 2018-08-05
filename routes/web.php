<?php

Route::get('/', function () {
    return view('public.index');
})->name('home');

Route::get('/contact', function () {
    return view('public.contact');
});

Route::get('/about', function () {
    return view('public.about');
});

Route::get('/latest', 'PostController@index')->name('latest');

Route::get('/policy', function() {
	return view('public.policy');
});

Route::get('/posts','PostController@create');
Route::get('/post/{id}','PostController@show');
Route::post('/posts','PostController@store');

Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');
Route::get('/logout','SessionsController@destroy');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
