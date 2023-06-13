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
            $table->id('id',36)->autoIncrement();
            $table->string('kontak', 255);
            $table->string('jenisKendaraan',255);
            $table->string('model_kendaraan',255);
            $table->string('tahun_keluaran');
            $table->string('warna',255);
            $table->string('plat_nomor',255);
            $table->string('foto_kendaraan');
            $table->date('tanggal_kejadian');
            $table->time('waktu_kejadian');
            $table->string('lokasi_kejadian',255);
            $table->string('deskripsi', 512);
            $table->foreignid('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('Cascade');
            $table->timestamps();
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
