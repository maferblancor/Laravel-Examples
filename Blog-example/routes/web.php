<?php

use App\Task;

Route::get('/', 'PostsController@index')->name('home'); //This its my home
Route::get('/contact', 'PagesControler@contact');
Route::get('/about', 'PagesControler@about');

Route::get('/task','TasksController@index');
Route::get('/task/{task}','TasksController@show');

Route::get('/posts','PostsController@index');
Route::get('/posts/create','PostsController@create');
Route::get('/posts/{post}','PostsController@show');
Route::post('/posts','PostsController@store');

Auth::routes();

#Route::get('/home', 'HomeController@index');


Route::post('/posts/{post}/comments','CommentsController@store');

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

Route::post('/login','SessionsController@store');
Route::get('/login','SessionsController@create');
Route::get('/logout','SessionsController@destroy');
