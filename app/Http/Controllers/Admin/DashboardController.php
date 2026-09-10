<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agenda;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahAgenda = Agenda::count();

        return view('admin.dashboard', compact('jumlahAgenda'));
    }
}