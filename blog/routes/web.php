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
Route::pattern('id', '[0-9]+');
Route::pattern('title', '[a-zA-Z]+');

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', 'postController@showdataInindex');
// Route::get('blog', function(){
// 	return view('blogs');
// });
Route::get('services', function(){
	return view('services');
});
// Route::get('blog-single', function(){
// 	return view('blog-single');
// });
Route::get('blog-single/{id?}/{title?}', 'postController@showsinglePost');
Route::get('contacts-us', function(){
	return view('contacts-us');
});
Route::get('about-us', function(){
	return view('about');
});
Route::get('team', function(){
	return view('team');
});
Route::get('pricing', function(){
	return view('pricing');
});
Route::group(['middleware'=>'guest'], function(){
		Route::get('manual/login', 'userController@login_get');
		Route::post('manual/login', 'userController@login_post');
});

Route::group(['middleware'=>'news'], function(){
	// Route::get('admin', function(){
	// 	return view('admin');
	// });
	Route::get('admin', 'postController@fetchAdminData');
	Route::post('add/post', 'postController@addPost');
	// Route::get('recycle', function(){
	// 	return view('recycle');
	// });
	Route::get('recycle', 'postController@showDeletedData');
	Route::delete('delete/data', 'postController@deleteData');
});
Route::get('blog', 'postController@showdata');
Route::post('insert/message', 'visitorController@insertData');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
