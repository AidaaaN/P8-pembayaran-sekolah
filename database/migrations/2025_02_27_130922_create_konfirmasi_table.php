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
            $table->id('id_konfirmasi',true,false)->nullable(false); // ID otomatis (bigint unsigned auto-increment)
            $table->integer('nomor_telepon',false,false)->nullable(false); // Nomor telepon (varchar untuk menghindari nol di awal)
            $table->binary('bukti_pembayaran'); // Bukti pembayaran dalam bentuk BLOB
            $table->date('tanggal',0); // Tanggal konfirmasi
            $table->string('jurusan_siswa',30)->nullable(false); // Jurusan siswa
            $table->integer('kelas_siswa', false,false)->nullable(false); // Kelas siswa
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
