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
        Schema::create('tagihan', function (Blueprint $table) {
            $table->id(); // id otomatis (bigint unsigned auto-increment)
            $table->integer('jumlah'); // Jumlah tagihan, cukup pakai integer
            $table->string('status', 20); // Status (misalnya: "Lunas", "Belum Lunas")
            $table->string('bulan', 20); // Nama bulan (misalnya: "Januari", "Februari")
            $table->integer('tahun'); // Tahun pembayaran
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tagihan');
    }
};
