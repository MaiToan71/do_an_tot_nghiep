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




Route::get('/','HomeController@Home')->name('Home');
Route::get('/upload','UploadController@Upload')->name('upload');
Route::get('/calendar','CalendarController@Calendar')->name('calendar');
Route::get('/content','ContentController@Content')->name('content');