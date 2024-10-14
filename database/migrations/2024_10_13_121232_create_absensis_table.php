<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensis', function (Blueprint $table) {
            $table->id('id_absensi'); // Primary Key
            $table->unsignedBigInteger('karyawan_id'); // Foreign Key to karyawan table
            $table->date('tanggal'); // Absensi date
            $table->time('jam_masuk')->nullable(); // Jam masuk karyawan
            $table->time('jam_keluar')->nullable(); // Jam keluar karyawan
            $table->enum('status', ['Hadir', 'Izin', 'Sakit', 'Alpa'])->default('Hadir'); // Status kehadiran
            $table->text('keterangan')->nullable(); // Keterangan tambahan

            // Foreign key relation to 'karyawan' table
            $table->foreign('karyawan_id')->references('id_karyawan')->on('karyawans')->onDelete('cascade');

            $table->timestamps(); // Automatically adds created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensi');
    }
}
