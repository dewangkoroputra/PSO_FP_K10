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
        Schema::create('kehilangan', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kontak', 255);
            $table->string('jenisKendaraan',255);
            $table->string('model_kendaraan',255);
            $table->string('tahun_keluaran');
            $table->string('warna',255);
            $table->string('plat_nomor',255);
            $table->string('foto_kendaraan');
            $table->date('tanggal_kejadian');
            $table->time('waktu_kejadian');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kehilangan');
    }
};
