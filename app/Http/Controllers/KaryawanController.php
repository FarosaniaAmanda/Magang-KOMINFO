<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::orderBy('bidang')
            ->orderBy('nama')
            ->get()
            ->groupBy('bidang');

        return view('profil.karyawan', compact('karyawans'));
    }
}