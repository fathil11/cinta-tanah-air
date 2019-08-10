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

// Home
Route::get('/', 'HomeController@showHome');

// Berita All
Route::get('berita', 'HomeController@showBerita');

// Berita Ketegori
Route::get('berita/{category}', 'HomeController@showBeritaCategory');

// Bertutur
Route::get('/bertutur', 'HomeController@showBertutur');

// Open Artikel
Route::get('lihat-artikel/{slug}', 'HomeController@openArticle');


// Profil
Route::get('/profil', 'HomeController@showProfil');

// Author
Route::group(['prefix' => 'author/berita', 'middleware' => 'auth'], function () {
    // Show
    Route::get('/', 'AuthorController@showBerita');

    // Create
    Route::get('/tambah', 'AuthorController@createBerita');
    Route::put('/tambah', 'AuthorController@storeBerita');

    // Edit
    Route::get('/edit/{id}', 'AuthorController@editBerita');
    Route::put('/edit/{id}', 'AuthorController@updateBerita');

    // Delete
    Route::get('/delete/{id}', 'AuthorController@deleteBerita');
});

// Admin
Route::get('/admin/welcome', 'AdminController@showWelcome');
Route::get('/admin', 'AdminController@showWelcome');
Route::get('/admin/statistik', 'AdminController@showStatistic');
Route::get('/admin/buat-artikel', 'AdminController@showBuatArtikel');
Route::get('/admin/kelola-artikel', 'AdminController@showKelolaArtikel');
Route::get('/admin/draft-artikel', 'AdminController@showDraftArtikel');
Route::get('/admin/kelola-user', 'AdminController@showKelolaUser');
Route::get('/admin/buat-user', 'AdminController@showBuatUser');
Route::get('/tesdb', 'AdminController@tesdb');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    // Admin Berita

    Route::group(['prefix' => 'berita'], function () {
        // Show Berita
        Route::get('/', 'AdminController@showBerita');
        Route::get('/draft', 'AdminController@showDraftBerita');

        // Create
        Route::get('/tambah', 'AdminController@createBerita');
        Route::put('/tambah', 'AdminController@storeBerita');

        // Article Traffic Controller
        Route::get('/posting/{id}', 'AdminController@postBerita');
        Route::get('/tarik/{id}', 'AdminController@unpostBerita');

        // Edit
        Route::get('/edit/{id}', 'AdminController@editBerita');
        Route::put('/edit/{id}', 'AdminController@updateBerita');

        // Delete
        Route::get('/delete/{id}', 'AdminController@deleteBerita');
    });

    // Admin Author
    Route::group(['prefix' => 'author'], function () {
        // Show
        Route::get('/', 'AdminController@showAuthor');

        // Create
        Route::get('/tambah', 'AdminController@createAuthor');
        Route::put('/tambah', 'AdminController@storeAuthor');

        // Edit
        Route::get('/edit/{id}', 'AdminController@editAuthor');
        Route::put('/edit/{id}', 'AdminController@updateAuthor');

        // Delete
        Route::get('/delete/{id}', 'AdminController@deleteAuthor');
    });
});



// Route::get('/home', 'HomeController@index')->name('home');
