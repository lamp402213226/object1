<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// 组长：指向index方法
Route::get('abc','IndexController@index');

// 张三：指向create方法
Route::get('abc','IndexController@create');


// 张三：后台路由
Route::get('ccc','TestController@index');
