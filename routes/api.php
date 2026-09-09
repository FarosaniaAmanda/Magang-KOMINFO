<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AgendaController;

Route::get('/agenda', [AgendaController::class, 'index']);

Route::get('/agenda/calendar', [AgendaController::class, 'calendar']);

Route::get('/agenda/tanggal/{tanggal}', [AgendaController::class, 'byDate']);