<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminActivityLogsTable extends Migration
{
    public function up()
    {
        Schema::create('admin_activity_logs', function (Blueprint $table) {
            $table->id('id_log'); // Primary key
            $table->foreignId('admin_id')->nullable()->constrained('admins', 'id_admin')->onDelete('cascade'); // Foreign key to admins
            $table->string('action', 255);
            $table->timestamp('action_time')->useCurrent();
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('admin_activity_logs');
    }
}
