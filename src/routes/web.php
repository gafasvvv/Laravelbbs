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

//一覧表示
Route::get('/', 'PostsController@index')->name('posts.index');

//新規作成
Route::get('posts/create', 'PostsController@create')->name('posts.create');

//新規保存
Route::post('posts/', 'PostsController@store')->name('posts.store');

//編集
Route::get('posts/{id}/edit', 'PostsController@edit')->name('posts.edit');

//更新
Route::put('posts/{id}', 'PostsController@update')->name('posts.update');

//削除
Route::delete('posts/{id}', 'PostsController@destroy')->name('posts.destroy');