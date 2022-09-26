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
    return view('home');
});

Route::get('/page_1', function() {

    $titolo = 'Lista di numeri';
    $arrayNumeri = [1,2,3,4,5];

    return view('page_1', ['titoloView' => $titolo, 'numeriView' => $arrayNumeri]);
})->name('prima_pagina');

Route::get('/page_2', function() {
    return view('page_2');
})->name('seconda_pagina');
