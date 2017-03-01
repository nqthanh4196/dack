<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','UserController@getSanPham');

Route::get('/shop', 'UserController@getDanhMucSanPham');

Route::get('/home','UserController@getDanhSachGiaSanPham;');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/single-product', function () {
    return view('single-product');
});

