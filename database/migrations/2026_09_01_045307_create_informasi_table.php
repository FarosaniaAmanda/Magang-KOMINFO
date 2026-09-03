<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Membuat tabel informasi.
     */
    public function up(): void
    {
        Schema::create('informasi', function (Blueprint $table) {
            $table->id();

            $table->string('judul');

            $table->string('kategori');

            $table->text('ringkasan');

            $table->longText('isi');

            $table->date('tanggal');

            $table->timestamps();
        });
    }

    /**
     * Menghapus tabel informasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi');
    }
};