<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('posts');
});

Route::get('/posts',                    ['as' => 'posts',           'uses' => '\App\Http\Controllers\PostController@index']);
Route::post('/posts',                   ['as' => 'postsSearch',     'uses' => '\App\Http\Controllers\PostController@index']);
Route::get('/posts/create',             ['as' => 'postsCreate',     'uses' => '\App\Http\Controllers\PostController@create']);
Route::post('/posts/store',             ['as' => 'postsStore',      'uses' => '\App\Http\Controllers\PostController@store']);
Route::get('/posts/{id}',               ['as' => 'postsShow',       'uses' => '\App\Http\Controllers\PostController@show']);
Route::get('/posts/delete/{id}',        ['as' => 'postsDelete',     'uses' => '\App\Http\Controllers\PostController@delete']);

// paso 2
Route::post('/comments/store',          ['as' => 'commentsStore',   'uses' => '\App\Http\Controllers\CommentController@store']);
Route::get('/comments/delete/{id}',     ['as' => 'commentsDelete',  'uses' => '\App\Http\Controllers\CommentController@delete']);



//Auth::routes();

//Route::get('/home', 'HomeController@index');
