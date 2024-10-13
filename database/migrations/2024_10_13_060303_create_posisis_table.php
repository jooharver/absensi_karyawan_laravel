<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosisisTable extends Migration
{
    public function up()
    {
        Schema::create('posisis', function (Blueprint $table) {
            $table->id('id_posisi'); // Pastikan ini ada dan sesuai
            $table->string('posisi', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('posisis');
    }
}
