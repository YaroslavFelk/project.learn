<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PostController@index');

Route::get('/posts/create', 'PostController@create');

Route::post('/posts', 'PostController@store');

Route::get('/posts/{post}', 'PostController@show')->name('post.show');

Route::get('/contacts', 'CallbackController@contacts');
Route::post('/contacts', 'CallbackController@store');

Route::get('/admin/feedbacks', 'CallbackController@index');

Route::get(
    '/about',
    function () {
        return view('about');
    }
);

