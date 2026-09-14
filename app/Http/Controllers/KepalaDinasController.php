<?php

namespace App\Http\Controllers;

use App\Models\KepalaDinas;

class KepalaDinasController extends Controller
{
    public function index()
    {
        $kepalaDinas = KepalaDinas::first();

        return view('profil.kepala-dinas', compact('kepalaDinas'));
    }
}