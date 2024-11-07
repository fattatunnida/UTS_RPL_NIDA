<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPostingsTable extends Migration
{
    public function up()
    {
        Schema::create('job_postings', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi'); // Kolom yang menyebabkan error sebelumnya
            $table->enum('status', ['open', 'closed']);
            $table->timestamps();
            chema::table('job_postings', function (Blueprint $table) {
                // Menambahkan kolom tanggal_pengajuan
                $table->timestamp('tanggal_pengajuan')->useCurrent(); // Menetapkan nilai default ke waktu saat ini
        });
    }

    public function down()
    {
        Schema::dropIfExists('job_postings');
    }
}
