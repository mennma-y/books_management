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


Route::get('/','BookController@index')->name('index');
Route::get('/books','BookController@index')->name('index');
//書籍登録画面
Route::get('/books/register','BookController@create')->name('create');
Route::post('/books/store','BookController@store')->name('store');
//書籍編集画面
Route::get('/books/{id}/edit/','BookController@edit')->name('edit');
Route::post('/books/{id}/update','BookController@update')->name('update');
Route::post('/books/{id}/delete','BookController@delete')->name('delete');