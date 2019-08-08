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

Auth::routes();
Route::get('/', 'StaticController@home')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/profile', 'UserController@profile')->name('profile');
Route::post('/updateProfile', 'UserController@updateProfile')->name('updateProfile');
Route::get('/post', 'UserController@post')->name('post');
Route::post('/updatePostCount', 'UserController@updatePostCount')->name('updatePostCount');
