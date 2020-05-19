<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PostController@index');

Route::get('/posts/create', 'PostController@create')->name('post.create');

Route::post('/posts', 'PostController@store')->name('post.store');

Route::get('/posts/{post}', 'PostController@show')->name('post.show');

Route::get('/posts/{post}/edit', 'PostController@edit')->name('post.edit');
Route::patch('/posts/{post}', 'PostController@update')->name('post.update');

Route::delete('/posts/{post}', 'PostController@destroy')->name('post.delete');

Route::get('/contacts', 'CallbackController@contacts');
Route::post('/contacts', 'CallbackController@store');

Route::get('/admin/feedbacks', 'CallbackController@index');

Route::get('/post/tags/{tag}', 'TagController@index')->name('post.tag');


Route::get(
    '/about',
    function () {
        return view('about');
    }
);

Auth::routes();

