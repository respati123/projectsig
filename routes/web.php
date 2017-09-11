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

Route::get('/', 'HomeController@index')->name('dashboard');
Route::get('/category', 'KategoriController@tampilan')->name('kategori');
Route::get('/history', 'KategoriController@index')->name('sejarah');
Route::resource('projectsig','KategoriController');
Auth::routes();

