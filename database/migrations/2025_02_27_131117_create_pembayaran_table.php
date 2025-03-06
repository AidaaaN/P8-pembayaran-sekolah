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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id(); // id otomatis (bigint unsigned auto-increment)
            $table->string('jns_pembayaran', 20); // Jenis pembayaran
            $table->date('tanggal_pembayaran'); // Tanggal pembayaran
            $table->integer('jumlah_pembayaran'); // Jumlah pembayaran
            $table->integer('sisa_pembayaran'); // Sisa pembayaran
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
