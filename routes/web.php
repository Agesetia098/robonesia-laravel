<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('admin', function(){
    return "<h1>Halaman Admin</h1>";
})->middleware('role:admin');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'studi' , 'as' => 'studi.'], function () {
    Route::get('/' , 'StudiController@index')->name('index');
    Route::get('/create' , 'StudiController@create')->name('create');
    Route::post('/' , 'StudiController@store')->name('store');
});

Route::group(['prefix' => 'mahasiswa' , 'as' => 'mahasiswa.'], function () {
    Route::get('/' , 'MahasiswaController@index')->name('index');
    Route::get('/create' , 'MahasiswaController@create')->name('create');
    Route::post('/' , 'MahasiswaController@store')->name('store');
    Route::get('/delete/{id}','MahasiswaController@destroy')->name('delete');
});

Route::group(['prefix' => 'mata-kuliah' , 'as' => 'mata-kuliah.'], function () {
    Route::get('/' , 'MataKuliahController@index')->name('index');
    Route::get('/create' , 'MataKuliahController@create')->name('create');
    Route::post('/' , 'MataKuliahController@store')->name('store');
});

// Wali Kuliah
Route::get('/wali-kuliah', 'WaliKuliahController@index')->name('wali-kuliah.index');

Route::group(['prefix' => 'nilai' , 'as' => 'nilai.'], function () {
    Route::get('/' , 'NilaiController@index')->name('index');
    Route::get('/create' , 'NilaiController@create')->name('create');
    Route::post('/' , 'NilaiController@store')->name('store');
});


