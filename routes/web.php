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

// Profile

Route::get('/profile/edit', 'EditProfileController@index')->name('editProfile');

Route::post('/profile/edit', 'EditProfileController@editProfile')->name('editProfileSubmit');

// User

Route::get('/user/{slug}', 'UserController@index')->name('user');

Route::get('/user/{slug}/follow', 'FollowController@follow')->name('follow');

Route::get('/user/{slug}/unfollow', 'FollowController@unfollow')->name('unfollow');

Route::post('/user/avatar/upload', 'HomeController@fileUpload')->name('upload');


Route::get('/logout', function()
{
    Auth::logout();
    return Redirect::to('/');
});