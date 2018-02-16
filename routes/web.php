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

Route::get('/', function () {
    return view('blogs.index');
});

Auth::routes();

// Route yang menangani Pendaftaran
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/caramendaftar', 'HomeController@caramendaftar');
Route::get('/termsandcondition', 'HomeController@termsandcondition');

Route::get('/user/activation/{token}','Auth\RegisterController@userActivation');

// Route Yang menangani smua tentang  Abouts Tentang
Route::get('/about', 'AboutsController@index');

// Rout yang menangani sumua Videos
Route::get('/movie', 'VideosController@index');

// Route yang menangani smua Berita
Route::get('/berita', 'BeritaController@index');

// Route yang menangani contact
Route::get('/contact', 'ContactsController@index');

// Route yang menangani Forum
Route::get('/forum', 'ForumsController@index');

Route::get('/lupapassword', 'HomeController@lupapassword');

