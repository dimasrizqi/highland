<?php

use Illuminate\Support\Facades\Route;
include __DIR__.'/App.php';
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



Route::get('resizeImage', '\App\Http\Controllers\ImageController@resizeImage');
Route::post('resizeImagePost', '\App\Http\Controllers\ImageController@resizeImagePost')->name('resizeImagePost');

Route::get('image-upload', '\App\Http\Controllers\UploadImageController@imageUpload')->name('image.upload');
Route::post('image-upload', '\App\Http\Controllers\UploadImageController@imageUploadPost')->name('image.upload.post');


Route::resource('beranda','\App\Http\Controllers\berandaController');
Route::get('parkiran/cari','\App\Http\Controllers\parkiranController@cari')->name('parkiran_cari');
Route::resource('parkiran','\App\Http\Controllers\parkiranController');
Route::resource('reservasi','\App\Http\Controllers\reservasiController');
    
Route::get('/', function () {
        return redirect()->route('beranda.index');
    })->name('home');