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
            $table->string('nomor_telepon', 15)->nullable(false); // Nomor telepon (varchar untuk menghindari nol di awal)
            $table->binary('bukti_pembayaran')->nullable(false); // Bukti pembayaran dalam bentuk BLOB
            $table->date('tanggal',0)->nullable(false); // Tanggal konfirmasi
            $table->string('jurusan_siswa',30)->nullable(false); // Jurusan siswa
            $table->integer('kelas_siswa')->nullable(false); // Kelas siswa
            $table->string('nama_siswa', 50)->nullable(false); // Nama siswa
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
