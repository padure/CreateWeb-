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
Route::get('/', function () {
    return view('layouts.home');
});


Route::get('/en', function () {
    return view('users.en.index');
});

Auth::routes();
Route::prefix('admin')->group(function () {
    Route::get('meniu', 'AdminController@meniu');
    Route::post('meniu', 'MeniuController@store');
    Route::get('charts', 'ChartController@index');
    Route::get('charts', 'TableController@index');
});
Route::get('admin', 'HomeController@index')->name('index');