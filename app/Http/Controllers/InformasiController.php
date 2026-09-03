<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InformasiController extends Controller
{
    public function index()
    {
        $informasi = Informasi::orderBy('tanggal', 'desc')->get();

        return view('informasi.index', compact('informasi'));
    }

    public function show($id)
    {
        $item = Informasi::findOrFail($id);

        return view('informasi.show', compact('item'));
    }
}