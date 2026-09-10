<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    
protected $table = 'kegiatan';

protected $fillable = [
        'nama_kegiatan',
        'tanggal_kegiatan',
        'waktu_mulai',
        'waktu_selesai',
        'lokasi',
        'bidang_penyelenggara',
        'peserta',
        'deskripsi',
        'berita_acara',
        'laporan_kegiatan',
    ];

    protected $casts = [
        'tanggal_kegiatan' => 'date',
    ];
}