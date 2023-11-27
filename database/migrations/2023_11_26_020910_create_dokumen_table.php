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
        Schema::create('dokumen', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_dokumen');
            $table->foreign('jenis_dokumen')->references('jenis_dokumen')->on('jenis'); // Menambahkan foreign key untuk menghubungkan dengan tabel 'jenis'
            $table->integer('nomor');
            $table->integer('tahun');
            $table->string('judul');
            $table->string('teu');
            $table->string('singkatan');
            $table->string('tempat');
            $table->date('tanggal_tetap');
            $table->date('tanggal_pengundangan');
            $table->string('subyek');
            $table->string('pemrakarsa');
            $table->string('sumber');
            $table->string('bidang');
            $table->string('urusan');
            $table->string('bahasa');
            $table->string('abstrak');
            $table->string('dokumen');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen');
    }
};
