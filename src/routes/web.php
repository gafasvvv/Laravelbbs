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
Route::get('/', 'BbsController@index');

//新規作成
Route::get('/bbs/create', 'BbsController@create');

//編集
Route::post('/bbs/update/{$id}', 'BbsController@update');

//削除
Route::delete('/bbs/delete/{$id}', 'BbsController@delete');