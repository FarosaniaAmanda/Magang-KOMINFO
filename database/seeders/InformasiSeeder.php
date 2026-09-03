<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Informasi;

class InformasiSeeder extends Seeder
{
    /**
     * Menambahkan data informasi.
     */
    public function run(): void
    {
        Informasi::create([
            'judul' => 'Pemerintah Dorong Transformasi Digital untuk Pelayanan Publik',
            'kategori' => 'Pemerintahan',
            'ringkasan' => 'Pemerintah terus mendorong transformasi digital untuk meningkatkan kualitas pelayanan publik.',
            'isi' => 'Transformasi digital menjadi salah satu langkah penting dalam meningkatkan kualitas pelayanan kepada masyarakat. Pemanfaatan teknologi informasi diharapkan dapat membuat pelayanan menjadi lebih cepat, mudah, transparan, dan efisien.',
            'tanggal' => '2026-09-01',
        ]);

        Informasi::create([
            'judul' => 'Layanan Administrasi Kependudukan Kini Semakin Mudah',
            'kategori' => 'Pengumuman',
            'ringkasan' => 'Masyarakat kini dapat memperoleh informasi layanan administrasi kependudukan dengan lebih mudah.',
            'isi' => 'Pemerintah terus meningkatkan kualitas layanan administrasi kependudukan melalui pemanfaatan teknologi digital. Masyarakat dapat memperoleh informasi mengenai layanan, persyaratan, dan prosedur secara lebih mudah.',
            'tanggal' => '2026-08-30',
        ]);

        Informasi::create([
            'judul' => 'Kegiatan Pemerintah dalam Meningkatkan Pelayanan Masyarakat',
            'kategori' => 'Kegiatan',
            'ringkasan' => 'Berbagai kegiatan pemerintah dilaksanakan untuk meningkatkan kualitas pelayanan kepada masyarakat.',
            'isi' => 'Kegiatan pemerintah dilakukan sebagai bentuk komitmen dalam memberikan pelayanan yang lebih baik kepada masyarakat. Kegiatan mencakup koordinasi, sosialisasi, pelayanan publik, dan pengembangan sistem pemerintahan.',
            'tanggal' => '2026-08-28',
        ]);

        Informasi::create([
            'judul' => 'Pemanfaatan Teknologi dalam Sistem Pemerintahan Digital',
            'kategori' => 'Teknologi',
            'ringkasan' => 'Teknologi informasi dimanfaatkan untuk mendukung sistem pemerintahan digital.',
            'isi' => 'Pemanfaatan teknologi informasi menjadi bagian penting dalam pengembangan pemerintahan digital. Sistem informasi yang terintegrasi dapat membantu meningkatkan efisiensi pelayanan dan memudahkan masyarakat memperoleh informasi.',
            'tanggal' => '2026-08-25',
        ]);

        Informasi::create([
            'judul' => 'Pentingnya Keamanan Data dalam Layanan Digital',
            'kategori' => 'Keamanan',
            'ringkasan' => 'Keamanan data menjadi salah satu aspek penting dalam penyelenggaraan layanan pemerintahan digital.',
            'isi' => 'Keamanan data harus menjadi perhatian dalam pengembangan layanan digital. Perlindungan terhadap data masyarakat diperlukan untuk menjaga keamanan, privasi, dan kepercayaan masyarakat terhadap layanan pemerintahan.',
            'tanggal' => '2026-08-22',
        ]);
    }
}