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

Route::get('/', 'MoviesController@index');

Route::resource('movies','MoviesController');

Route::resource('/sidebar','SidebarController@index');

Route::post('movies/{id}/comments','MoviesController@addComment')
->name('movies.comment');

Route::get('/genres/{genre}', 'GenresController@show');
