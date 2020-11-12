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

// Route::get('/', function () {
//     return view('pages/home');
// })->name('app_home');

// Route::get('/', fn() => view('pages.home'))->name('app_home');
Route::view('/', 'pages.home')->name('app_home');
Route::view('/', 'pages.about')->name('app_about');

// Route::get('/about-us', function () {
//     return view('pages/about');
// })->name('app_about');
