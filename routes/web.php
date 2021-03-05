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

Route::get('/', 'Guests\PageController@homepage');

Route::resource('comics', 'Guests\GuestController');

Auth::routes();


Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function () {


    Route::get('/', 'AdminController@index');
    Route::resource('novels', 'NovelController');


});