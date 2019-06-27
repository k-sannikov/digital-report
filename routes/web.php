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
Route::redirect('/', '/user');
Auth::routes();

Route::view('/', 'index');
//Группа user
Route::group(['prefix' => 'user', 'as' => 'user.', 'middleware' => 'auth',], function () {
    Route::get('/', 'User\ReportController@index')->name('index');
    Route::post('/', 'User\ReportController@calculate')->name('calculate');
});

//Группа данных для модели Setting
$groupDataSettings = [
    'namespace' => 'Settings',
    'middleware' => 'auth',
];

Route::group($groupDataSettings, function () {
    Route::resource(
        'settings',
        'SettingsController',
        ['only' => ['edit', 'update', 'destroy']]
    )->parameters(['settings' => 'user']);
});

