<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawansTable extends Migration
{
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id('id_karyawan'); // Primary key
            $table->string('nik', 16)->unique()->nullable();
            $table->string('nama', 100);
            $table->date('tanggal_lahir')->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->nullable();
            $table->text('alamat')->nullable();
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu', 'Lainnya'])->nullable();
            $table->string('no_telepon', 15)->nullable();
            $table->string('email', 100)->nullable();
            $table->timestamp('tanggal_masuk')->useCurrent();
            $table->string('foto_path')->nullable(); // Kolom untuk menyimpan path gambar
            $table->foreignId('id_posisi')->nullable()->constrained('posisis', 'id_posisi')->onDelete('set null'); // Foreign key to posisis
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('karyawans');
    }
}