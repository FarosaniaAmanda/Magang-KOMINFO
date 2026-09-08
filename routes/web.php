<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/informasi', [InformasiController::class, 'index'])
    ->name('informasi.index');

Route::get('/informasi/{id}', [InformasiController::class, 'show'])
    ->name('informasi.show');
    Route::get('/agenda', function () {
    return view('agenda.index');
})->name('agenda.index');
Route::get('/kegiatan', function () {
    return view('kegiatan.index');
})->name('kegiatan.index');