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

Route::get('/', function () {
    echo " Hi! Selamat Datang di Website Laravel";
});
Route::get('/about', function () {
    echo " NIM : 2141723001 <br><br>";
    echo " GALILEY SINGGANG M.Y <br><br>";
    echo " TI 2G";
});
Route::get('/articles/{id}', function ($id) {
    echo " Ini adalah halaman Artikel dengan ID : {$id}";
});
