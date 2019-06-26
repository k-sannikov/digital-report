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
Route::redirect('/', '/login');
Auth::routes();
//Группа user
Route::group(['prefix' => 'user', 'as' => 'user.', 'middleware' => 'auth',], function () {
    Route::get('/', 'User\ReportController@index')->name('index');
    Route::post('/', 'User\ReportController@calculate')->name('calculate');
});

