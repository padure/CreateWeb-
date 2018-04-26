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
Route::get('register', function () {
    return redirect('login');
});
Route::get('/', 'UsersController@index');
Route::post('/send', 'UsersController@store');
Route::get('/en', 'EnUsersController@index');
Route::post('search', 'SearchController@search');
Route::post('en/search', 'SearchController@searchen');

Auth::routes();
Route::prefix('admin')->group(function () {
    Route::get('meniu', 'AdminController@meniu');
    Route::get('charts', 'ChartController@index');
    Route::get('tables', 'TableController@index');
    Route::get('cards', 'CardController@index');
    Route::get('navbars', 'NavbarController@index');
    Route::get('login', 'ExempleController@login');
    Route::get('register', 'ExempleController@register');
    Route::get('forgot', 'ExempleController@forgot');
    Route::get('blank', 'ExempleController@blank');
    Route::get('servicii', 'MeniuController@servicii');
    Route::post('servicii', 'MeniuController@store');
    Route::get('{id}/edit', 'MeniuController@edit');
    Route::PATCH('{id}/edit', 'MeniuController@update');
    Route::get('portofoliu', 'PortofoliuController@index');
    Route::post('portofoliu', 'PortofoliuController@store');
    Route::get('despre', 'AbautsController@index');
    Route::post('despre', 'AbautsController@store');
    Route::get('team', 'TeamController@index');
    Route::post('team', 'TeamController@store');
});
Route::get('admin', 'HomeController@index')->name('index');