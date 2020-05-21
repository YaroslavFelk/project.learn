<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PostController@index');
Route::resource('posts', 'PostController');


Route::get('/contacts', 'CallbackController@contacts')->name('contacts');
Route::post('/contacts', 'CallbackController@store')->name('contacts.store');

Route::get('/admin/feedbacks', 'CallbackController@index')->name('contacts.index');

Route::get('/post/tags/{tag}', 'TagController@index')->name('post.tag');


Route::get(
    '/about',
    function () {
        return view('about');
    }
);

Auth::routes();

