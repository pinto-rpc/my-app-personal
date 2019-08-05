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
    return view('home');
})->name('home');

Route::get('nosotros', function () {
    return view('about');
})->name('about');

Route::get('servicios', function () {
    return view('service');
})->name('service');
Route::get('contacto', function () {
    return view('contact');
})->name('contact');