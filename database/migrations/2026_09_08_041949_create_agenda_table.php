<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();

            $table->string('judul');

            $table->text('deskripsi')->nullable();

            $table->date('tanggal');

            $table->time('waktu_mulai')->nullable();

            $table->time('waktu_selesai')->nullable();

            $table->string('lokasi')->nullable();

            $table->string('penyelenggara')->nullable();

            $table->enum('status', [
                'akan_datang',
                'selesai'
            ])->default('akan_datang');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('agenda');
    }
};