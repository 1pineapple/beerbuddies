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

Route::get('/home', function() { return Redirect::to('/'); });

Route::post('/user/avatar/upload', 'HomeController@fileUpload')->name('upload');


Route::get('/logout', function()
{
    Auth::logout();
    Session::flush();
    return Redirect::to('/');
});