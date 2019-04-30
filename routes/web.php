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

Route::get('test', function () {
    return "Test Page";
});

Route::get('/user/name', 'User\UserController@name');

// 添加中间件来过滤请求
// 1.创建一个带参数的路由，用来产生一个请求，并且附带一个age参数
// 2.创建一个简单的中间件，用来过滤掉 age > 25 的用户，来实现一个简单的中间件过滤
// 3.未通过中间件的请求将被重定向到主页
// 4.通过中间件的的请求将达到指定的控制器，实现相应动作
Route::get('/young/{age}', 'UserController@young')->middleware('young');

Route::get('bladeview', 'HomeController@home');

Route::get('myspace', 'StaticPagesController@myspace')->name('myspace');

Route::get('news', 'StaticPagesController@news')->name('news');

Route::resource('articles', 'ArticlesController');