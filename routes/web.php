<?php

use App\Http\Controllers\BeasiswaController;

Route::get('/beasiswa', [BeasiswaController::class, 'index'])->name('beasiswa.index');
Route::post('/beasiswa/store', [BeasiswaController::class, 'store'])->name('beasiswa.store');
Route::get('/beasiswa/hasil', [BeasiswaController::class, 'hasil'])->name('beasiswa.hasil');
