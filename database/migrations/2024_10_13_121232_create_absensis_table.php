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
            $table->id('id_absensi'); // Primary key
            $table->unsignedBigInteger('karyawan_id'); // Foreign key to karyawan table
            $table->date('tanggal'); // Absensi date
            $table->time('jam_masuk')->nullable(); // Jam masuk karyawan
            $table->time('jam_keluar')->nullable(); // Jam keluar karyawan
            $table->enum('status', ['Hadir', 'Izin', 'Sakit', 'Alpa'])->nullable(); // Status kehadiran, default null
            $table->text('keterangan')->nullable(); // Keterangan tambahan

            // Foreign key relation to 'karyawans' table
            $table->foreign('karyawan_id')->references('id_karyawan')->on('karyawans')->onDelete('cascade');

            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensis');
    }
}
