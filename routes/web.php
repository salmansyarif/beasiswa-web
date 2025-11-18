<?php

use App\Http\Controllers\BeasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/beasiswa/pilihan', [BeasiswaController::class, 'pilihan'])
    ->name('beasiswa.pilihan');


Route::get('/beasiswa/daftar', [BeasiswaController::class, 'daftar'])
    ->name('beasiswa.daftar');


Route::post('/beasiswa/store', [BeasiswaController::class, 'store'])
    ->name('beasiswa.store');


Route::get('/beasiswa/hasil', [BeasiswaController::class, 'hasil'])
    ->name('beasiswa.hasil');


Route::get('/beasiswa/download/{file}', [BeasiswaController::class, 'downloadBerkas'])
    ->name('beasiswa.download');
