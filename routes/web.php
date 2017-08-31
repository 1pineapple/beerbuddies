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

Route::group(['middleware' => ['auth']], function () {
    
    // Profile

    Route::get('/profile/edit', 'EditProfileController@index')->name('editProfile');
    Route::post('/profile/edit', 'EditProfileController@editProfile')->name('editProfileSubmit');

    // User
    
    Route::group(['prefix' => 'user'], function () {
        
        Route::get('/{slug}', 'UserController@index')->name('user');
        Route::get('/{slug}/follow', 'FollowController@follow')->name('follow');
        Route::get('/{slug}/unfollow', 'FollowController@unfollow')->name('unfollow');
        Route::post('/avatar/upload', 'HomeController@fileUpload')->name('upload');
        
    });

});


Route::get('/logout', function()
{
    Auth::logout();
    return Redirect::route('home');
});
