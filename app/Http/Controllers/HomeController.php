<?php

namespace App\Http\Controllers;

use App\Models\Informasi;

class HomeController extends Controller
{
    public function index()
    {
        $informasi = Informasi::orderBy('tanggal', 'desc')
            ->take(3)
            ->get();

        return view('home', compact('informasi'));
    }
}