<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsesoriaController; // ✅ Punto y coma al final

// Ruta principal
Route::get('/', function () {
    return view('welcome');
});

// Rutas RESTful para asesorias
Route::resource('asesorias', AsesoriaController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
