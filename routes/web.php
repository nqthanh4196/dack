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

Route::get('/', function () {
	$data= Cart::content();
    return view('index',['data'=>$data]);
});
Route::get('/shop', function(){
	$data= Cart::content();
	return view('shop',['data'=>$data]);
});

Route::get('/contact', function () {
	$data= Cart::content();
    return view('contact',['data'=>$data]);
});


Route::resource('categories','CategoriesController');

Route::resource('classify','ClassifyController');

Route::resource('supplier','SupplierController');

Route::resource('comment','CommentController');

Route::resource('cart','CartController');

Route::get('checkout','CartController@checkout');

Route::get('/cart/{id}/delete','CartController@destroy');

Route::get('/product/search','ProductController@search');

Route::group(['middleware' => ['auth']], function ()
{
	
	Route::get('product/{id}/delete', 'ProductController@delete');


	Route::resource('product', 'ProductController',['except' => [
    'show']]);

    Route::post('password/change','UserController@change');

	Route::get('password/change',function()
		{
			return view('auth.passwords.change');
		});

	Route::post('myaccount','UserController@myaccount');

	Route::get('myaccount',function()
		{
			return view('auth.myaccount');
		});
});

Route::resource('product', 'ProductController',['only' => [
    'show']]);

Auth::routes();

Route::get('captcha-form-validation',array('as'=>'google.get-recaptcha-validation-form','uses'=>'FileController@getCaptchaForm')) ;
Route::post('captcha-form-validation',array('as'=>'google.post-recaptcha-validation','uses'=>'FileController@postCaptchaForm')) ;


Route::get('/logout','HomeController@logout');

Route::get('/home', 'HomeController@index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



