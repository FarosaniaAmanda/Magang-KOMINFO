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
}<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SurveyKepuasan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class SurveyController extends Controller
{
    // =========================
    // ADMIN - DATA SURVEY
    // =========================

    public function index(Request $request)
    {
        $query = SurveyKepuasan::query();

        // =========================
        // SEARCH
        // =========================

        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                    ->orWhere('no_wa', 'like', "%{$search}%")
                    ->orWhere('alamat', 'like', "%{$search}%")
                    ->orWhere('pesan', 'like', "%{$search}%");
            });
        }

        // =========================
        // FILTER BULAN
        // =========================

        if ($request->filled('bulan')) {
            $query->whereMonth('created_at', $request->bulan);
        }

        // =========================
        // FILTER TAHUN
        // =========================

        if ($request->filled('tahun')) {
            $query->whereYear('created_at', $request->tahun);
        }

        // =========================
        // STATISTIK
        // =========================

        $statistik = clone $query;

        $totalSurvey = $statistik->count();

        $rataRating = $statistik->avg('rating');

        // =========================
        // DATA SURVEY
        // =========================

        $survey = $query
            ->latest('created_at')
            ->paginate(10)
            ->withQueryString();

        // =========================
        // SURVEY BULAN INI
        // =========================

        $surveyBulanIni = SurveyKepuasan::query()
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();

        // =========================
        // KIRIM KE VIEW
        // =========================

        return view('admin.survey.index', compact(
            'survey',
            'totalSurvey',
            'rataRating',
            'surveyBulanIni'
        ));
    }


    // =========================
    // DOWNLOAD PDF
    // =========================

    public function downloadPdf(Request $request)
    {
        $query = SurveyKepuasan::query();

        // =========================
        // SEARCH
        // =========================

        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                    ->orWhere('no_wa', 'like', "%{$search}%")
                    ->orWhere('alamat', 'like', "%{$search}%")
                    ->orWhere('pesan', 'like', "%{$search}%");
            });
        }

        // =========================
        // FILTER BULAN
        // =========================

        if ($request->filled('bulan')) {
            $query->whereMonth('created_at', $request->bulan);
        }

        // =========================
        // FILTER TAHUN
        // =========================

        if ($request->filled('tahun')) {
            $query->whereYear('created_at', $request->tahun);
        }

        // =========================
        // AMBIL DATA
        // =========================

        $survey = $query
            ->latest('created_at')
            ->get();

        // =========================
        // RATA-RATA RATING
        // =========================

        $rataRating = $survey->avg('rating');

        // =========================
        // GENERATE PDF
        // =========================

        $pdf = Pdf::loadView(
            'admin.survey.pdf',
            compact(
                'survey',
                'rataRating'
            )
        );

        return $pdf->download(
            'laporan-survey-kepuasan.pdf'
        );
    }
}