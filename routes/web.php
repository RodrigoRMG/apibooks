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

Route::resource('/book', 'BooksController');
Route::resource('/user', 'BookUserController');
Route::resource('/category', 'CategoriesController');

Route::post('bookAvailable','BooksController@setAvailable');
Route::post('bookBorrowed','BooksController@setBorrowed');