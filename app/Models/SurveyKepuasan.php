<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurveyKepuasan extends Model
{
    protected $table = 'survey_kepuasan';

    protected $fillable = [
        'nama',
        'no_wa',
        'alamat',
        'rating',
        'penilaian_pelayanan',
        'pesan',
    ];
}