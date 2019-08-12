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
Route::post('mensajes', function(){
    $data = request()->all();
    Mail::send("emails.emails", $data, function($message) use($data){
        $message->from($data['email'], $data['name'])
                ->to('amistad.hola@gmail.com', 'Rodrigo')
                ->subject($data['subject']);
    });

    return back();
})->name('mensaje');