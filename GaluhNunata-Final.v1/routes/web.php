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

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'BeritaController@index')->name('index');

Route::get('/berita/berita-nasional', 'BeritaController@beritanasional')->name('berita.berita-nasional');
Route::get('/berita/sosial-budaya', 'BeritaController@sosialdanbudaya')->name('berita.sosial-dan-budaya');
Route::get('/berita/tokoh-aktivis', 'BeritaController@tokohdanaktivis')->name('berita.tokoh-dan-aktivis');

Route::get('/berita/post-baru', 'BeritaController@create')->name('post-baru');


