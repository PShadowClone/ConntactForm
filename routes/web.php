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

Route::resource('contact', 'ContactController');
Route::get('contact/fill', ['as' => 'contact.ajax.fill', 'uses' => 'ContactController@fillDataTable']);
Route::get('messages', ['as' => 'message.ajax.fill', 'uses' => 'ContactController@index']);
