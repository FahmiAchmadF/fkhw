<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Admin/index', 'AdminController@index');
Route::get('Admin/artikel', 'AdminController@getArtikel');
Route::post('Admin/artikel/proses', 'AdminController@postArtikel');
Route::get('Admin/artikel/list', 'AdminController@getArtikelList');
Route::get('Admin/artikel/edit/{id}', 'AdminController@editArtikel');
Route::put('Admin/artikel/edit/proses/{id}', 'AdminController@editArtikelProses');
Route::delete('Admin/artikel/hapus/{id}', 'AdminController@deleteArtikel');

Route::get('Admin/tags', 'AdminController@getTags');
Route::post('Admin/tags/proses', 'AdminController@postTags');
Route::get('Admin/tags/list', 'AdminController@getTagsList');
Route::get('Admin/tags/edit/{id}', 'AdminController@editTags');
Route::put('Admin/tags/edit/proses/{id}', 'AdminController@editTagsProses');
Route::delete('Admin/tags/hapus/{id}', 'AdminController@deleteTags');

// Authentication routes...
Route::get('auth/login', 'AdminController@getLogin');
Route::post('auth/login', 'AdminController@postLogin');
Route::get('auth/logout', 'AdminController@getLogout');

// Registration routes...
Route::get('auth/register', 'AdminController@getRegister');
Route::post('auth/register', 'AdminController@postRegister');