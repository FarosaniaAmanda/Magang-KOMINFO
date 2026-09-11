<?php

namespace App\Http\Controllers\Admin\Profil;

use App\Http\Controllers\Controller;
use App\Models\KepalaDinas;
use App\Models\Karyawan;

class ProfilController extends Controller
{
    public function index()
    {
        // Mengambil data Kepala Dinas
        $kepalaDinas = KepalaDinas::first();

        // Mengambil semua data Karyawan
        $karyawans = Karyawan::latest()->get();

        // Menampilkan halaman utama Profil
        return view('admin.profil.index', compact(
            'kepalaDinas',
            'karyawans'
        ));
    }
}