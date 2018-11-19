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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/foo', function(){
	return 'Hello World';
});

// Route::get('/user/{name?}', function ($name = 'John') {
// 	return $name;
// });

Route::get('/user', 'UserController@index')->name('user');

Route::get('/course', 'CourseController@index')->name('course');

Route::get('/settings', 'SettingsController@index')->name('settings');
?>