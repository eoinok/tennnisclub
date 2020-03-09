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

Route::get('/', 'memberController@index');


Route::get('/home','memberController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

Route::resource('members', 'memberController');
Route::resource('courts', 'courtController');
Route::resource('bookings', 'bookingController');
