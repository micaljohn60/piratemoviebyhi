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


Route::get('/','UploadController@show');
Route::get('/detail','UploadController@show');
Route::get('/detail/{id}','WatchController@showDetail');
Route::get('/watch','UploadController@show');
Route::get('/watch/{id}','WatchController@show');

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/upload','UploadController@index');
Route::post('/upload','UploadController@store');

