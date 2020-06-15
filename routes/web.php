<?php

// use Illuminate\Auth;
// use Illuminate\Routing\Route;

Auth::routes();

Route::get('/', 'DashController@index')->name('dash');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function () {

    Route::get('/', 'DashController@index')->name('dash');

    Route::prefix('/user')->namespace('User')->name('user.')->group(function (){
        Route::get('/', 'UserController@index')->name('index');
    });

    Route::prefix('/title')->namespace('Items')->name('title.')->group(function (){
        Route::get('/', 'TitleController@index')->name('index');
        Route::get('/add', 'TitleController@add')->name('add');
        Route::post('/add', 'TitleController@store')->name('store');
        Route::get('/{id}/edit', 'TitleController@edit')->name('edit');
        Route::post('/{id}/edit', 'TitleController@save')->name('save');
    });

    Route::prefix('/author')->namespace('Items')->name('author.')->group(function (){
        Route::get('/', 'AuthorController@index')->name('index');
        Route::get('/add', 'AuthorController@add')->name('add');
        Route::post('/add', 'AuthorController@store')->name('store');
        Route::get('/{id}/edit', 'AuthorController@edit')->name('edit');
        Route::post('/{id}/edit', 'AuthorController@save')->name('save');
    });

    Route::prefix('/release')->namespace('Items')->name('release.')->group(function (){
        Route::get('/', 'ReleaseController@index')->name('index');
        Route::get('/add', 'ReleaseController@add')->name('add');
        Route::post('/add', 'ReleaseController@store')->name('store');
        Route::get('/{id}/edit', 'ReleaseController@edit')->name('edit');
        Route::post('/{id}/edit', 'ReleaseController@save')->name('save');
    });

    Route::prefix('/piece')->namespace('Items')->name('piece.')->group(function (){
        Route::get('/', 'PieceController@index')->name('index');
        Route::get('/add', 'PieceController@add')->name('add');
        Route::post('/add', 'PieceController@store')->name('store');
        Route::get('/{id}/edit', 'PieceController@edit')->name('edit');
        Route::post('/{id}/edit', 'PieceController@save')->name('save');
        Route::get('/{id}/reserve', 'PieceController@reserve')->name('reserve');
    });

    Route::prefix('/publisher')->namespace('Items')->name('publisher.')->group(function (){
        Route::get('/', 'PublisherController@index')->name('index');
        Route::get('/add', 'PublisherController@add')->name('add');
        Route::post('/add', 'PublisherController@store')->name('store');
        Route::get('/{id}/edit', 'PublisherController@edit')->name('edit');
        Route::post('/{id}/edit', 'PublisherController@save')->name('save');
    });

    Route::prefix('/reservation')->namespace('Operations')->name('reservation.')->group(function (){
        Route::get('/', 'ReservationController@index')->name('index');
        Route::get('/{id}/accept', 'ReservationController@accept')->name('accept');
        Route::get('/{id}/reject', 'ReservationController@reject')->name('reject');
    });

    Route::prefix('/hire')->namespace('Operations')->name('hire.')->group(function (){
        Route::get('/', 'HireController@index')->name('index');
        Route::get('/{id}/return', 'HireController@return')->name('return');
    });

    Route::prefix('/regal')->namespace('Places')->name('regal.')->group(function (){
        Route::get('/', 'RegalController@index')->name('index');
    });

    Route::prefix('/localization')->namespace('Places')->name('localization.')->group(function (){
        Route::get('/', 'LocalizationController@index')->name('index');
    });
});
