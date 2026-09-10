<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use App\Models\Agenda;
use App\Models\Kegiatan;

class DashboardController extends Controller
{
    public function index()
{
    $jumlahAgenda = Agenda::count();
    $jumlahBerita = Informasi::count();
    $jumlahKegiatan = Kegiatan::count();

    return view('admin.dashboard', compact(
        'jumlahAgenda',
        'jumlahBerita',
        'jumlahKegiatan'
    ));
}
}