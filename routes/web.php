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

Route::get('/', 'PostControler@index')->name('index');

Route::get('/post/create', 'PostControler@create')->name('post.create');
Route::post('/post/create', 'PostControler@store')->name('post.store');

Route::get('/post/{id}', 'PostControler@show')->name('post.show');

Route::get('/post/{id}/edit', 'PostControler@edit')->name('post.edit');
Route::post('/post/{id}/edit', 'PostControler@update')->name('post.update');

Route::post('/post/{id}/destroy', 'PostControler@destroy')->name('post.destroy');
