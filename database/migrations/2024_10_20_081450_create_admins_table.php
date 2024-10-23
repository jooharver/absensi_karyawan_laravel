<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id('id_admin'); // Menggunakan id() secara otomatis menambahkan auto_increment
            $table->string('username', 50)->notNullable();
            $table->string('password', 255)->notNullable();
            $table->timestamps(); // Ini menambahkan created_at dan updated_at secara otomatis
        });
    }

    public function down()
    {
        Schema::dropIfExists('admins');
    }
}