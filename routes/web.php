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



Route::get('/dashboard','DashboardController@index');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/dashboard/logo-image', 'DashboardController@index');
Route::get('/dashboard/hero-image', 'DashboardController@hero');
Route::get('/dashboard/itinerary-image', 'DashboardController@itinerary');
Route::get('/dashboard/stylist-image', 'DashboardController@stylist');

Route::post('/admin/file/upload', 'FileController@store');
Route::get('/admin/file/delete/{id}', 'FileController@delete');
Route::get('/admin/file/use/{id}', 'FileController@use');
Route::post('/admin/file/update/{id}', 'FileController@update');
Route::get('/admin/file/move-up/{id}', 'FileController@up');
Route::get('/admin/file/move-down/{id}', 'FileController@down');
