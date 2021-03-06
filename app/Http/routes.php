<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'HomeController@index')->name('home');

//Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
//{
//	$message->from("autoreplyartemkopytko@gmail.com");
//	$message->to('kopytkoartem@gmail.com');
//});

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/about', 'AboutController@index');

Route::get('/posts', 'PostsController@index')->name('posts');

Route::get('/posts/create', 'PostsController@create');

Route::get('/posts/{post}', 'PostsController@show')->name('posts_id');

Route::get('/posts/{post}/edit', 'PostsController@edit');

Route::get('/posts/tags/{tag}', 'TagsController@index');

Route::post('/posts/{post}', 'PostsController@update');

Route::post('/posts', 'PostsController@store');

Route::post('/posts/{id}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationsController@create');

Route::post('/register', 'RegistrationsController@store');

Route::get('/login', 'SessionsController@create');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');
