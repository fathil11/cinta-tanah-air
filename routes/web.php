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

/// Public Route
Route::group(['prefix' => '/'], function () {
    /// Show Home
    Route::get('', 'HomeController@showHome');

    // Show Berita All
    Route::get('berita', 'HomeController@showBerita');

    // Show Berita Ketegori
    Route::get('berita/{category}', 'HomeController@showBeritaCategory');

    // Show Bertutur
    Route::get('bertutur', 'HomeController@showBertutur');

    // Show Open Artikel
    Route::get('lihat-artikel/{slug}', 'HomeController@openArticle');

    // Show Profil
    Route::get('profil', 'HomeController@showProfil');
});

/// Admin Route
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    // Show Welcome
    Route::get('', 'AdminController@showWelcome');
    Route::get('welcome', 'AdminController@showWelcome');

    // Show Statistik
    Route::get('statistik', 'AdminController@showStatistic');

    // Show Buat Artikel
    Route::get('buat-artikel', 'AdminController@showBuatArtikel');

    // Show Kelola Artikel
    Route::get('kelola-artikel', 'AdminController@showKelolaArtikel');

    // Show Draft Artikel
    Route::get('draft-artikel', 'AdminController@showDraftArtikel');

    // Show Kelola User
    Route::get('kelola-user', 'AdminController@showKelolaUser');

    // Delete User
    Route::get('delete-user/{id}', 'AdminController@deleteUser');

    // Show Buat User
    Route::get('buat-user', 'AdminController@showBuatUser');

    // Buat User
    Route::put('buat-user', 'AdminController@buatUser');
});

/// Author Route
Route::group(['prefix' => 'author', 'middleware' => 'author'], function () {
    // Show Welcome
    Route::get('', 'AuthorController@showWelcome');
    Route::get('welcome', 'AuthorController@showWelcome');

    // Show Profil
    Route::get('profil', 'AuthorController@showProfil');

    // Show Buat Artikel
    Route::get('buat-artikel', 'AuthorController@showBuatArtikel');

    // Show Kelola Artikel
    Route::get('kelola-artikel', 'AuthorController@showKelolaArtikel');
});

Auth::routes();

/// Login Route
Route::get('login', function () {
    return view('home.login');
});

/// Logout Route
Route::get('logout', 'HomeController@logout');


// Route::get('/home', 'HomeController@index')->name('home');
