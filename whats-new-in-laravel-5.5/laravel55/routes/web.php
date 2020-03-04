<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/driver', 'DriverController@index')->name('driver_list');
Route::get('/driver/create', 'DriverController@create')->name('driver_create');
Route::post('/driver', 'DriverController@store')->name('driver_store');
