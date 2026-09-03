<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Menjalankan semua seeder.
     */
    public function run(): void
    {
        $this->call([
            InformasiSeeder::class,
        ]);
    }
}