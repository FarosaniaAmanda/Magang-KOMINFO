<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use App\Models\Kegiatan;
use App\Models\Agenda;
use App\Models\SurveyKepuasan;

class DashboardController extends Controller
{
    public function index()
    {
        // =========================
        // STATISTIK DASHBOARD
        // =========================

        $jumlahBerita = Informasi::count();

        $jumlahKegiatan = Kegiatan::count();

        $jumlahAgenda = Agenda::whereDate(
            'tanggal',
            '>=',
            now()->toDateString()
        )->count();


        // =========================
        // SURVEY KEPUASAN
        // =========================

        $jumlahSurvey = SurveyKepuasan::count();

        $rataRating = SurveyKepuasan::avg('rating');


        // Ambil 5 survey terbaru
        $surveyTerbaru = SurveyKepuasan::latest()
            ->take(5)
            ->get();


        return view('admin.dashboard', compact(
            'jumlahBerita',
            'jumlahKegiatan',
            'jumlahAgenda',
            'jumlahSurvey',
            'rataRating',
            'surveyTerbaru'
        ));
    }
}