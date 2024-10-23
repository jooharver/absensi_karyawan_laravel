<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThrsTable extends Migration
{
    public function up()
    {
        Schema::create('thrs', function (Blueprint $table) {
            $table->id('id_thr'); // Primary key
            $table->foreignId('id_karyawan')->nullable()->constrained('karyawans', 'id_karyawan')->onDelete('cascade'); // Foreign key to posisis
            $table->decimal('jam_kerja', 5, 2); // Jam kerja karyawan
            $table->decimal('besaran_thr', 10, 2); // Besaran THR
            $table->timestamps(); // Kolom created_at dan updated_at

        });
    }

    public function down()
    {
        Schema::dropIfExists('thrs');
    }
}