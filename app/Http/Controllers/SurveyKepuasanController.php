<?php

namespace App\Http\Controllers;

use App\Models\SurveyKepuasan;
use Illuminate\Http\Request;

class SurveyKepuasanController extends Controller
{
    // =========================
    // HALAMAN SURVEY PUBLIK
    // =========================

    public function index()
    {
        return view('survey.index');
    }


    // =========================
    // SIMPAN SURVEY
    // =========================

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'   => 'required|string|max:255',
            'no_wa'  => 'nullable|string|max:20',
            'alamat' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'pesan'  => 'required|string',
        ]);

        SurveyKepuasan::create($validated);

        return redirect()
            ->route('survey.index')
            ->with('success', 'Survey berhasil dikirim.');
    }


    // =========================
    // ADMIN - DATA SURVEY
    // =========================

    public function adminIndex(Request $request)
    {
        $query = SurveyKepuasan::query();


        // SEARCH
        if ($request->filled('search')) {

            $search = $request->search;

            $query->where(function ($q) use ($search) {

                $q->where('nama', 'like', "%{$search}%")
                  ->orWhere('no_wa', 'like', "%{$search}%")
                  ->orWhere('alamat', 'like', "%{$search}%")
                  ->orWhere('pesan', 'like', "%{$search}%");

            });
        }


        // FILTER BULAN
        if ($request->filled('bulan')) {

            $query->whereMonth(
                'created_at',
                $request->bulan
            );

        }


        // FILTER TAHUN
        if ($request->filled('tahun')) {

            $query->whereYear(
                'created_at',
                $request->tahun
            );

        }


        // =========================
        // STATISTIK
        // =========================

        $statistik = clone $query;

        $totalSurvey = $statistik->count();

        $rataRating = $statistik->avg('rating');


        // =========================
        // DATA TABEL
        // =========================

        $survey = $query
            ->latest()
            ->paginate(10)
            ->withQueryString();


        // =========================
        // SURVEY BULAN INI
        // =========================

        $surveyBulanIni = SurveyKepuasan::whereMonth(
            'created_at',
            now()->month
        )
        ->whereYear(
            'created_at',
            now()->year
        )
        ->count();


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


        // SEARCH
        if ($request->filled('search')) {

            $search = $request->search;

            $query->where(function ($q) use ($search) {

                $q->where('nama', 'like', "%{$search}%")
                  ->orWhere('no_wa', 'like', "%{$search}%")
                  ->orWhere('alamat', 'like', "%{$search}%")
                  ->orWhere('pesan', 'like', "%{$search}%");

            });
        }


        // FILTER BULAN
        if ($request->filled('bulan')) {

            $query->whereMonth(
                'created_at',
                $request->bulan
            );

        }


        // FILTER TAHUN
        if ($request->filled('tahun')) {

            $query->whereYear(
                'created_at',
                $request->tahun
            );

        }


        $survey = $query
            ->latest()
            ->get();


        $rataRating = $survey->avg('rating');


        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView(
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