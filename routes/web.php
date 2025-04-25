<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/reserva', function () {
    return view('pages.reservate');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

