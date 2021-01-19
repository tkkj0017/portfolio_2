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

// アイテム一覧ページ
Route::get('/', 'ItemController@index');
// アイテム詳細ページ
Route::get('/item/{item}', 'ItemController@show');

Route::post('/item/cartitem', 'CartItemController@store');


Route::get('/cartitem', 'CartItemController@index');

Route::delete('/cartitem/{cartItem}', 'CartItemController@destroy');

Route::put('/cartitem/{cartItem}', 'CartItemController@update');

Route::get('/order', 'OrderController@index');

Route::post('/order', 'OrderController@store');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();