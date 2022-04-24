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
// Les trois facons de faires des routes sans controller

// 01. De facon complet et complexe
Route::get('/', function () {
    return view('pages.home');
})->name('app_home');

// 02. Avec des fonction flechés
Route::get('/about-us', fn () => view('pages.about'))->name('app_about');

// Avec la methode static view
Route::view('/help', 'pages.help')->name('help');
