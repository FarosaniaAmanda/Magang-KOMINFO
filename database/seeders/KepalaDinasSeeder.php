<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KepalaDinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kepala_dinas')->insert([
            'nama' => 'ANDRIYANTO S.SIT, MM',
            'nip' => '12345678910',
            'jabatan' => 'Kepala Dinas Komunikasi, Informasi Dan Statistik',
            'deskripsi' => 'Profil Kepala Dinas',
            'foto' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}