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
Route::get('/contact', 'ContactController@show');

Route::get('/test', function() {
	$name= request ('name');
	return view('test', [
		'name' => $name
	]);
});
Route::get('/post/{post}', 'PostsController@show');
Route::get('about', function() {
	$article = App\article::take(3)->latest()->get();
	$link = App\links::latest()->get();
	//return $link;
	return view('about', [
		'articles'=> $article,
		'links'=> $link		
	]);
});
Route::get('articles', 'ArticleController@index');
Route::post('articles', 'ArticleController@store');
Route::get('articles/create', 'ArticleController@create');
Route::get('articles/{article}', 'ArticleController@show');
Route::get('articles/{article}/edit', 'ArticleController@edit');
Route::put('articles/{article}', 'ArticleController@update');




Route::get('admins', 'AdminController@index');
Route::get('doctors', 'DoctorController@index');
Route::get('nurses', 'NurseController@index');
Route::get('staff', 'StaffController@index');
Route::get('register', 'StaffController@create');
Route::post('register', 'StaffController@store');
Route::get('profile/{profile}', 'StaffController@show');
Route::get('profile/{profile}/edit', 'StaffController@edit');
Route::put('profile/{profile}', 'StaffController@update');
Route::delete('profile/{profile}', 'StaffController@destroy');
Route::get('search', 'StaffController@search');

