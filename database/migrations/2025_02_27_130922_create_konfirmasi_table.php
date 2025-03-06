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
        Schema::create('konfirmasi', function (Blueprint $table) {
            $table->id(); // ID otomatis (bigint unsigned auto-increment)
            $table->string('nomor_telepon', 15); // Nomor telepon (varchar untuk menghindari nol di awal)
            $table->binary('bukti_pembayaran'); // Bukti pembayaran dalam bentuk BLOB
            $table->date('tanggal'); // Tanggal konfirmasi
            $table->string('jurusan_siswa', 30); // Jurusan siswa
            $table->integer('kelas_siswa'); // Kelas siswa
            $table->string('nama_siswa', 50); // Nama siswa
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konfirmasi');
    }
};
