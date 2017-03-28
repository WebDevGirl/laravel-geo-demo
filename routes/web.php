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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');

Route::get('/users/{user}','UserController@show')->name('profile');
Route::get('/users','UserController@index')->name('users');

Route::get('/users/{user}/follow','UserController@follow')->name('follow');
Route::get('/users/{user}/unfollow','UserController@unfollow')->name('unfollow');

Route::get('/spaces/{space}','SpaceController@show')->name('space');
Route::get('/spaces','SpaceController@index')->name('spaces');
Route::get('/spaces-test','SpaceController@test')->name('spaces-test');
Route::get('/spaces-test/{lat}/{long}','SpaceController@testView')->name('spaces-test-view');