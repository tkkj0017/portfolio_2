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

// トップページ(ニュース一覧表示)
Route::get('/', 'NewsController@index');


// アイテム一覧取得  
Route::get('/item_list', 'ItemController@index');
// アイテム詳細取得
Route::get('/item/{item}', 'ItemController@show');

// カートの中身取得
Route::get('cartitem', 'CartItemController@index');
// カートへ追加
Route::post('item/cartitem', 'CartItemController@store');
// カートのアイテム削除
Route::delete('cartitem/{cartItem}', 'CartItemController@destroy');
// カートのアイテムの数量変更
Route::put('cartitem/{cartItem}', 'CartItemController@update');

// 購入リスト取得
Route::get('order', 'OrderController@index');
// 購入する
Route::post('order', 'OrderController@store');

// お問い合わせ画面
// index
Route::get('contact/index', 'ContactController@index')->name('contact.index');
// create
Route::get('contact/create', 'ContactController@create')->name('contact.create');

// お問い合わせ送信
Route::post('contact/store', 'ContactController@store')->name('contact.store');



// ホーム画面(マイページ)
Route::get('home', 'HomeController@index');

// 認証に必要なルーティングを定義
Auth::routes();