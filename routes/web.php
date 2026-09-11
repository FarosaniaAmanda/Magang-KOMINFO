<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\SurveyKepuasanController;

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AgendaController;
use App\Http\Controllers\Admin\SurveyController;
use App\Http\Controllers\Admin\InformasiController as AdminInformasiController;
use App\Http\Controllers\Admin\KegiatanController as AdminKegiatanController;

// =========================
// CONTROLLER PROFIL ADMIN
// =========================

use App\Http\Controllers\Admin\Profil\ProfilController;
use App\Http\Controllers\Admin\Profil\KepalaDinasController;
use App\Http\Controllers\Admin\Profil\KaryawanController;


// =====================================================
// HALAMAN PUBLIK
// =====================================================

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

        // Halaman utama Profil
        // /admin/profil
        Route::get('/profil', [ProfilController::class, 'index'])
            ->name('profil.index');


        // =================================================
        // PROFIL KEPALA DINAS
        // =================================================

        // Menampilkan halaman profil kepala dinas
        // /admin/profil/kepala-dinas
        Route::get('/profil/kepala-dinas', [KepalaDinasController::class, 'index'])
            ->name('profil.kepala-dinas');

        // Menyimpan perubahan profil kepala dinas
        Route::put('/profil/kepala-dinas', [KepalaDinasController::class, 'update'])
            ->name('profil.kepala-dinas.update');


        // =================================================
        // PROFIL KARYAWAN
        // =================================================

        // Menampilkan daftar karyawan
        // /admin/profil/karyawan
        Route::get('/profil/karyawan', [KaryawanController::class, 'index'])
            ->name('profil.karyawan');

        // Halaman tambah karyawan
        // /admin/profil/karyawan/create
        Route::get('/profil/karyawan/create', [KaryawanController::class, 'create'])
            ->name('profil.karyawan.create');

        // Menyimpan karyawan baru
        Route::post('/profil/karyawan', [KaryawanController::class, 'store'])
            ->name('profil.karyawan.store');

        // Halaman edit karyawan
        // /admin/profil/karyawan/{karyawan}/edit
        Route::get('/profil/karyawan/{karyawan}/edit', [KaryawanController::class, 'edit'])
            ->name('profil.karyawan.edit');

        // Menyimpan perubahan karyawan
        Route::put('/profil/karyawan/{karyawan}', [KaryawanController::class, 'update'])
            ->name('profil.karyawan.update');

        // Menghapus karyawan
        Route::delete('/profil/karyawan/{karyawan}', [KaryawanController::class, 'destroy'])
            ->name('profil.karyawan.destroy');
    });


// =====================================================
// PROFIL PUBLIK
// =====================================================

// Profil Kepala Dinas
Route::get('/profil/kepala-dinas', function () {
    return view('profil.kepala-dinas');
})->name('profil.kepala');

// Profil Karyawan
Route::get('/profil/karyawan', function () {
    return view('profil.karyawan');
})->name('profil.karyawan');