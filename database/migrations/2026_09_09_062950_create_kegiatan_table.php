<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id();

            $table->string('nama_kegiatan');

            $table->date('tanggal_kegiatan');

            $table->time('waktu_mulai')->nullable();
            $table->time('waktu_selesai')->nullable();

            $table->string('lokasi')->nullable();

            $table->string('bidang_penyelenggara');

            $table->text('peserta')->nullable();

            $table->text('deskripsi')->nullable();

            $table->string('berita_acara')->nullable();

            $table->string('laporan_kegiatan')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatan');
    }
};