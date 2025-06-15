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

use Illuminate\Support\Facades\Route;
// ROUTE UNTUK USER YANG BELUM LOGIN (GUEST)
Route::group(['middleware' => ['guest']], function () {
    Route::get('/', 'AlumniController@login')->name('login');
    Route::post('/ceklogin', 'AlumniController@cekLogin');
    Route::get('/search-alumni', 'AlumniController@searchAlumni');
    Route::get('/actsearchalumni', 'AlumniController@actsearchalumni');
});

// ROUTE UNTUK USER YANG SUDAH LOGIN (AUTH)
Route::group(['middleware' => ['auth']], function () {
    Route::get('/alumni', 'AlumniController@alumni')->name('alumni');
    Route::get('/alumni/detail/{id}', 'AlumniController@detail');
    Route::get('/formcreate', 'AlumniController@formCreate');
    Route::post('/savealumni', 'AlumniController@savealumni');
    Route::get('/form-ubah/{id}', 'AlumniController@formUbah');
    Route::put('/update/{id}', 'AlumniController@ubahalumni');
    Route::get('/deleteAlumni/{id}', 'AlumniController@deleteAlumni');
    Route::get('/ubahpass', 'AlumniController@ubahpass');
    Route::post('/updatepass', 'AlumniController@updatepass');
    Route::get('/logout', 'AlumniController@logout');
});
