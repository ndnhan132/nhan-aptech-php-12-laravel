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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home',     'ArticleController@index')->name('home');
Route::get('/add',      'ArticleController@add')->name('add');
Route::post('/store',   'ArticleController@store')->name('store');
Route::delete('/{id}/delete', 'ArticleController@deleteArticle')->name('delete');
Route::put('/{id}/update', 'ArticleController@updateArticle')->name('update');
Route::get('/{id}/show', 'ArticleController@showArticle')->name('show');
Route::get('/{id}/edit', 'ArticleController@editArticle')->name('edit');