<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KepalaDinas extends Model
{
    protected $table = 'kepala_dinas';

    protected $fillable = [
        'nama',
        'nip',
        'jabatan',
        'deskripsi',
        'foto',
    ];
}