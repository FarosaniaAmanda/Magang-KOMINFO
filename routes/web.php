<?php

use Illuminate\Support\Facades\Route;

// =====================================================
// CONTROLLER PUBLIK
// =====================================================

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KepalaDinasController;
use App\Http\Controllers\SurveyKepuasanController;

// =====================================================
// CONTROLLER ADMIN
// =====================================================

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AgendaController;
use App\Http\Controllers\Admin\SurveyController;
use App\Http\Controllers\Admin\InformasiController as AdminInformasiController;
use App\Http\Controllers\Admin\KegiatanController as AdminKegiatanController;

// =====================================================
// CONTROLLER PROFIL ADMIN
// =====================================================

use App\Http\Controllers\Admin\Profil\ProfilController;
use App\Http\Controllers\Admin\Profil\KepalaDinasController as AdminKepalaDinasController;
use App\Http\Controllers\Admin\Profil\KaryawanController as AdminKaryawanController;


// =====================================================
// HALAMAN PUBLIK
// =====================================================

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/informasi', [InformasiController::class, 'index'])
    ->name('informasi.index');

Route::get('/informasi/{id}', [InformasiController::class, 'show'])
    ->name('informasi.show');


// =====================================================
// AGENDA PUBLIK
// =====================================================

Route::get('/agenda', function () {
    return view('agenda.index');
})->name('public.agenda');


// =====================================================
// KEGIATAN PUBLIK
// =====================================================

Route::get('/kegiatan', [KegiatanController::class, 'index'])
    ->name('kegiatan.index');

Route::get('/kegiatan/{kegiatan}', [KegiatanController::class, 'show'])
    ->name('kegiatan.show');


// =====================================================
// SURVEY KEPUASAN PUBLIK
// =====================================================

Route::get('/survey-kepuasan', [SurveyKepuasanController::class, 'index'])
    ->name('survey.index');

Route::post('/survey-kepuasan', [SurveyKepuasanController::class, 'store'])
    ->name('survey.store');


// =====================================================
// LOGIN ADMIN
// =====================================================

Route::get('/login-admin', [AdminAuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/login-admin', [AdminAuthController::class, 'login'])
    ->name('admin.login.process');


// =====================================================
// SURVEI KEPUASAN PELAYANAN
// =====================================================

Route::get('/survei-kepuasan', function () {
    return view('survei.kepuasan');
})->name('survei.kepuasan');


// =====================================================
// HALAMAN ADMIN
// =====================================================

Route::middleware('admin')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // =================================================
        // DASHBOARD
        // =================================================

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');


        // =================================================
        // LOGOUT
        // =================================================

        Route::post('/logout', [AdminAuthController::class, 'logout'])
            ->name('logout');


        // =================================================
        // AGENDA ADMIN
        // =================================================

        Route::resource('agenda', AgendaController::class);


        // =================================================
        // INFORMASI / BERITA ADMIN
        // =================================================

        Route::resource('informasi', AdminInformasiController::class);


        // =================================================
        // KEGIATAN ADMIN
        // =================================================

        Route::resource('kegiatan', AdminKegiatanController::class);


        // =================================================
        // SURVEY KEPUASAN ADMIN
        // =================================================

        Route::get('/survey', [SurveyController::class, 'index'])
            ->name('survey.index');

        Route::get('/survey/download-pdf', [SurveyController::class, 'downloadPdf'])
            ->name('survey.pdf');


        // =================================================
        // PROFIL ADMIN
        // =================================================

        Route::get('/profil', [ProfilController::class, 'index'])
            ->name('profil.index');


        // =================================================
        // PROFIL KEPALA DINAS ADMIN
        // =================================================

        Route::get('/profil/kepala-dinas', [AdminKepalaDinasController::class, 'index'])
            ->name('profil.kepala-dinas');

        Route::put('/profil/kepala-dinas', [AdminKepalaDinasController::class, 'update'])
            ->name('profil.kepala-dinas.update');


        // =================================================
        // PROFIL KARYAWAN ADMIN
        // =================================================

        Route::get('/profil/karyawan', [AdminKaryawanController::class, 'index'])
            ->name('profil.karyawan');

        Route::get('/profil/karyawan/create', [AdminKaryawanController::class, 'create'])
            ->name('profil.karyawan.create');

        Route::post('/profil/karyawan', [AdminKaryawanController::class, 'store'])
            ->name('profil.karyawan.store');

        Route::get('/profil/karyawan/{karyawan}/edit', [AdminKaryawanController::class, 'edit'])
            ->name('profil.karyawan.edit');

        Route::put('/profil/karyawan/{karyawan}', [AdminKaryawanController::class, 'update'])
            ->name('profil.karyawan.update');

        Route::delete('/profil/karyawan/{karyawan}', [AdminKaryawanController::class, 'destroy'])
            ->name('profil.karyawan.destroy');
    });


// =====================================================
// PROFIL PUBLIK
// =====================================================

// Profil Kepala Dinas
Route::get('/profil/kepala-dinas', [KepalaDinasController::class, 'index'])
    ->name('profil.kepala');


// Profil Karyawan
Route::get('/profil/karyawan', [KaryawanController::class, 'index'])
    ->name('profil.karyawan');