<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CultureController;
use App\Http\Controllers\AboutBccController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SpesialController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;

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
// Praktikum 1 Routes

// Route::get('/', function () {
//     echo " Hi! Selamat Datang di Website Laravel";
// });
// Route::get('/about', function () {
//     echo " NIM : 2141723001 <br><br>";
//     echo " GALILEY SINGGANG M.Y <br><br>";
//     echo " TI 2G";
// });
// Route::get('/articles/{id}', function ($id) {
//     echo " Ini adalah halaman Artikel dengan ID : {$id}";
// });

// Praktikum 2 Controller

// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Modify Praktikum 2 Controller

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'index']);
// Route::get('/articles/{id}', [ArticlesController::class, 'index']);


// Praktikum 3 - Desain Routing Web Company Profile
// Referensi dari https://www.bbc.com/ 

// Route Sport memakai prefik
// Route::prefix('sport')->group(function () {
//     Route::get('/football', [SportController::class, 'Football'])->name('football');
//     Route::get('/cricket', [SportController::class, 'Cricket'])->name('cricket');
//     Route::get('/tennis', [SportController::class, 'Tennis'])->name('tennis');
//     Route::get('/cycling', [SportController::class, 'Cycling'])->name('cycling');
// });

//Route News memakai param
// Route::prefix('news')->group(function () {
//     Route::get('/world-asia-china-{id}', [NewsController::class, 'World'])->name('world');
// });

// Route Culture memakai prefik
// Route::prefix('culture')->group(function () {
//     Route::get('/designed', [CultureController::class, 'Designed'])->name('design');
//     Route::get('/style', [CultureController::class, 'Style'])->name('style');
//     Route::get('/the-collection', [CultureController::class, 'TheCollection'])->name('the-collection');
// });

// Route About BBC memakai route biasa
// Route::get('/aboutthebbc', [AboutBccController::class, 'AboutBcc'])->name('aboutthebbc');

//Praktikum 3 View

// Auth::routes();
// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/about', [AboutController::class, 'index'])->name('about');
// Route::get('/category', [CategoryController::class, 'index'])->name('category');
// Route::get('/specials', [SpecialsController::class, 'index'])->name('specials');
// Route::get('/myaccount', [MyaccountController::class, 'index'])->name('myaccount');
// Route::get('/register', [RegisterController::class, 'index'])->name('register');
// Route::get('/details', [DetailsController::class, 'index'])->name('details');
// Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Praktikum 4 Model;

Auth::routes();
Route::resource('/', HomeController::class);
Route::resource('/about', AboutController::class);
Route::resource('/kategori', KategoriController::class);
Route::resource('/spesial', SpesialController::class);
Route::resource('/login', LoginController::class);
Route::resource('/register', RegisterController::class);
Route::resource('/detail', DetailController::class);
Route::resource('/contact', ContactController::class);
