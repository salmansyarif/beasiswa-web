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
        Schema::create('beasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('nomor_telepon');
            $table->integer('semester');
            $table->decimal('ipk', 3, 2);
            $table->string('pilihan_beasiswa')->nullable();
            $table->string('berkas');
          $table->enum('status', ['Belum di Verifikasi', 'Sudah di Verifikasi'])->default('Belum di Verifikasi');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beasiswas');
    }
};
