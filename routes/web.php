<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AgendaController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/informasi', [InformasiController::class, 'index'])
    ->name('informasi.index');

Route::get('/informasi/{id}', [InformasiController::class, 'show'])
    ->name('informasi.show');

    // Login Admin
Route::get('/login-admin', [AdminAuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/login-admin', [AdminAuthController::class, 'login'])
    ->name('admin.login.process');


// Halaman Admin
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::post('/logout', [AdminAuthController::class, 'logout'])
        ->name('logout');

    // Agenda
    Route::resource('agenda', AgendaController::class);

});
    Route::get('/agenda', function () {
    return view('agenda.index');
})->name('agenda.index');
Route::get('/kegiatan', function () {
    return view('kegiatan.index');
})->name('kegiatan.index');