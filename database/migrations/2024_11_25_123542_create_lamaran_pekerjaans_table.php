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
        Schema::create('lamaran_pekerjaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_lowongan')->constrained('lowongan_pekerjaans')->onDelete('cascade');
            $table->foreignId('id_pelamar')->constrained('pelamars')->onDelete('cascade');
            $table->date('tanggal_lamaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lamaran_pekerjaans');
    }
};
