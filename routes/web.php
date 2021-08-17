<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('index');
});

Route::get('/', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/(post)','PostController@show');
Route::post('/posts', 'PostController@store');