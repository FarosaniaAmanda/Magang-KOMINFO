<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    // Semua agenda
    public function index()
    {
        $agenda = Agenda::orderBy('tanggal', 'asc')
            ->orderBy('waktu_mulai', 'asc')
            ->get();

        return response()->json($agenda);
    }

    // Agenda berdasarkan bulan dan tahun
    public function calendar(Request $request)
    {
        $bulan = $request->query('bulan', now()->month);
        $tahun = $request->query('tahun', now()->year);

        $agenda = Agenda::whereYear('tanggal', $tahun)
            ->whereMonth('tanggal', $bulan)
            ->orderBy('tanggal')
            ->orderBy('waktu_mulai')
            ->get();

        return response()->json([
            'bulan' => (int) $bulan,
            'tahun' => (int) $tahun,
            'agenda' => $agenda
        ]);
    }

    // Agenda berdasarkan tanggal
    public function byDate($tanggal)
    {
        $agenda = Agenda::whereDate('tanggal', $tanggal)
            ->orderBy('waktu_mulai')
            ->get();

        return response()->json([
            'tanggal' => $tanggal,
            'agenda' => $agenda
        ]);
    }
}