<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('index');
});

Route::get('/', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}', 'PostController@update');
Route::delete('/posts/{post}', 'PostController@delete');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('comment', 'CommentsController', ['only' => ['store']]);
