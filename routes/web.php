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
// Route::get('/', 'ItemController@index');

// アイテム一覧取得
Route::get('/item', 'ItemController@index');
// アイテム詳細取得
Route::get('/item/{item}', 'ItemController@show');

// カートへ追加
Route::post('/item/cartitem', 'CartItemController@store');
// カートの中身取得
Route::get('/cartitem', 'CartItemController@index');
// カートのアイテム削除
Route::delete('/cartitem/{cartItem}', 'CartItemController@destroy');
// カートのアイテムの数量変更
Route::put('/cartitem/{cartItem}', 'CartItemController@update');

// 購入リスト取得
Route::get('/order', 'OrderController@index');
// 購入する
Route::post('/order', 'OrderController@store');

// お問い合わせ画面
// Route::get('/contact', 'OrderController@index');

// お問い合わせ送信
// Route::post('/contact', 'OrderController@store');


// ホーム画面(マイページ)
Route::get('/home', 'HomeController@index');

// 認証に必要なルーティングを定義
Auth::routes();