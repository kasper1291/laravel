<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/price', function () {
    return view('price');
})->name('price');

Route::get('/process', function () {
    return view('process');
})->name('process');

Route::post('/question/submit', '\App\Http\Controllers\ContactController@submit')->name('questionForm');
