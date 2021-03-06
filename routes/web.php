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

Route::resource('shares', 'ShareController');
Route::resource('image', 'ImageController');
Route::post('image', 'UploadImageController@upload')->name('upload.image');

Route::get('photo', 'PhotoController@index')->name('photo.index');
Route::post('photo', 'PhotoController@uploadImage');