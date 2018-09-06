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

/*
在 Laravel 中我们较为常用的几个基本的 HTTP 操作分别为 GET、POST、PATCH、DELETE。
GET 常用于页面读取
POST 常用于数据提交
PATCH 常用于数据更新
DELETE 常用于数据删除
在这四个动作中，PATCH 和 DELETE 是不被浏览器所支持的，但我们可以通过在提交中表单中做一些手脚，让服务器以为这两个动作是从浏览器中发出的一样，后面我会具体讲解如何在表单中通过添加隐藏域的方式来欺骗服务器。这里你只需要有个大概的印象即可。
*/

Route::get('/', 'StaticPagesController@home')->name('home');        // StaticPagesController 控制器的 home 的方法, name的目的是为路由指定名称
Route::get('/help', 'StaticPagesController@help')->name('help');    // StaticPagesController 控制器的 help 的方法, name的目的是为路由指定名称
Route::get('/about', 'StaticPagesController@about')->name('about');  // StaticPagesController 控制器的 about 的方法, name的目的是为路由指定名称

Route::get('signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController');

Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');
