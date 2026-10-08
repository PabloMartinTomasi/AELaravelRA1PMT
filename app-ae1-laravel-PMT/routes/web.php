<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/saludo/{nombre}', function ($nombre) { 
    return "<h1>Hola $nombre. Bienvenido a laravel.</h1>";
}); 