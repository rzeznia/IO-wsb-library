<?php

// use Illuminate\Auth;
// use Illuminate\Routing\Route;

Auth::routes();

Route::get('/', 'DashController@index')->name('dash');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::prefix('/user')->namespace('User')->name('user.')->group(function (){
    Route::get('/', 'UserController@index')->name('index');
});

Route::prefix('/title')->namespace('Items')->name('title.')->group(function (){
    Route::get('/', 'TitleController@index')->name('index');
});

Route::prefix('/author')->namespace('Items')->name('author.')->group(function (){
    Route::get('/', 'AuthorController@index')->name('index');
});

Route::prefix('/release')->namespace('Items')->name('release.')->group(function (){
    Route::get('/', 'ReleaseController@index')->name('index');
});

Route::prefix('/piece')->namespace('Items')->name('piece.')->group(function (){
    Route::get('/', 'PieceController@index')->name('index');
});

Route::prefix('/publisher')->namespace('Items')->name('publisher.')->group(function (){
    Route::get('/', 'PublisherController@index')->name('index');
});

Route::prefix('/reservation')->namespace('Operations')->name('reservation.')->group(function (){
    Route::get('/', 'ReservationController@index')->name('index');
});

Route::prefix('/hire')->namespace('Operations')->name('hire.')->group(function (){
    Route::get('/', 'HireController@index')->name('index');
});

Route::prefix('/regal')->namespace('Places')->name('regal.')->group(function (){
    Route::get('/', 'RegalController@index')->name('index');
});

Route::prefix('/localization')->namespace('Places')->name('localization.')->group(function (){
    Route::get('/', 'LocalizationController@index')->name('index');
});
