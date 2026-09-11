<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\SurveyKepuasanController;

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AgendaController;
use App\Http\Controllers\Admin\InformasiController as AdminInformasiController;
use App\Http\Controllers\Admin\KegiatanController as AdminKegiatanController;


// =========================
// HALAMAN PUBLIK
// =========================

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/informasi', [InformasiController::class, 'index'])
    ->name('informasi.index');

Route::get('/informasi/{id}', [InformasiController::class, 'show'])
    ->name('informasi.show');

Route::get('/agenda', function () {
    return view('agenda.index');
})->name('public.agenda');

Route::get('/kegiatan', [KegiatanController::class, 'index'])
    ->name('kegiatan.index');

Route::get('/kegiatan/{kegiatan}', [KegiatanController::class, 'show'])
    ->name('kegiatan.show');

Route::get('/survey-kepuasan', [SurveyKepuasanController::class, 'index'])
    ->name('survey.index');

Route::post('/survey-kepuasan', [SurveyKepuasanController::class, 'store'])
    ->name('survey.store');


// =========================
// LOGIN ADMIN
// =========================

Route::get('/login-admin', [AdminAuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/login-admin', [AdminAuthController::class, 'login'])
    ->name('admin.login.process');


// =========================
// HALAMAN ADMIN
// =========================

Route::middleware('admin')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        // Logout
        Route::post('/logout', [AdminAuthController::class, 'logout'])
            ->name('logout');

        // Agenda Admin
        Route::resource('agenda', AgendaController::class);

        // Informasi / Berita Admin
        Route::resource('informasi', AdminInformasiController::class);
        
        // kegiatan admin
        Route::resource('kegiatan', AdminKegiatanController::class);

        // Survey Kepuasan
        Route::get('/survey-kepuasan', [SurveyKepuasanController::class, 'adminIndex'])
            ->name('survey.index');

        Route::get('/survey-kepuasan/download-pdf', [SurveyKepuasanController::class, 'downloadPdf'])
            ->name('survey.pdf');

    });