<?php

// use Illuminate\Auth;
// use Illuminate\Routing\Route;

Auth::routes();

Route::get('/', 'DashController@index')->name('dash');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::prefix('/user')->namespace('User')->name('user.')->group(function (){
    Route::get('/', 'UserController@index')->name('index');
});
