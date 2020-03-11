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
    return view('index');
});
Route::get('blog', function(){
	return view('blogs');
});
Route::get('services', function(){
	return view('services');
});
Route::get('blog-single', function(){
	return view('blog-single');
});
Route::get('contacts-us', function(){
	return view('contacts-us');
});
Route::get('team', function(){
	return view('team');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
