<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('karyawans')->insert([
            [
                'nama' => 'aditia s.kom',
                'nip' => '12345678',
                'jabatan' => 'staff',
                'bidang' => 'E-Government',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Farosania Amanda S.Kom',
                'nip' => '23456789',
                'jabatan' => 'staff',
                'bidang' => 'IKP',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}