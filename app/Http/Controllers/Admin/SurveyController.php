<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SurveyKepuasan;
use Carbon\Carbon;

class SurveyController extends Controller
{
    /**
     * Menampilkan halaman survey kepuasan admin.
     */
    public function index()
    {
        // Semua data survey, terbaru di atas
        $survey = SurveyKepuasan::latest()->get();

        // Total seluruh survey
        $totalSurvey = SurveyKepuasan::count();

        // Rata-rata rating
        $rataRating = SurveyKepuasan::avg('rating');

        // Jumlah survey pada bulan ini
        $surveyBulanIni = SurveyKepuasan::whereMonth(
            'created_at',
            Carbon::now()->month
        )
        ->whereYear(
            'created_at',
            Carbon::now()->year
        )
        ->count();

        return view('admin.survey.index', compact(
            'survey',
            'totalSurvey',
            'rataRating',
            'surveyBulanIni'
        ));
    }
}