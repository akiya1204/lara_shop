<?php

use Illuminate\Support\Facades\Route;

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

// laravelをインストールした時のwelcome画面を表示するためのルートなので
// このルートはコメントアウトしてください。

// Route::get('/', function () {
//     return view('welcome');
// });

// ルーティングの基本的な書き方
// Route::メソッド名('url指定', 'Controller名@Controllerの中の関数の呼び出し')

// localhost:8000にアクセスしたらShoppingControllerのindexにアクセス
// name() : ルートに名前をつける
Route::get('/', 'ShoppingController@index')->name('top');

// localhost:8000/listにアクセスしたら,ShoppingControllerのindexにアクセス
Route::get('list', 'ShoppingController@index');
// Route::get('list/{id}')でコントローラーに対してデータを送ることが可能(phpの$_GETみたいなもの)
// ?はidの値が入っていなかった場合でもエラーが発生しないようにするための処理
Route::get('list/{id?}', 'ShoppingController@index')->name('list');
Route::get('list/detail/{id}', 'ShoppingController@detail')->name('detail');

Auth::routes(); // ユーザー認証作成時に自動的に書き込まれる

Route::get('/home', 'HomeController@index')->name('home'); // 自動生成

// group :ルートを同じ条件でまとめて設定
// 今回は['middleware' => 'auth']を書くことで、このURLに飛んだ際、
// ユーザー認証がされていない場合はログインページに遷移する設定をしている。

Route::group(['middleware' => 'auth'], function () {
    Route::get('cart/{id?}', 'ShoppingController@cart')->name('cart');
    Route::get('cart/delete/{id?}', 'ShoppingController@delete')->name('delete');
});
