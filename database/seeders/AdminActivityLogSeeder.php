<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminActivityLogSeeder extends Seeder
{
    public function run()
    {
        DB::table('admin_activity_logs')->insert([
            [
                'admin_id' => 1,
                'action' => 'Login',
                'action_time' => now(),
            ],
            [
                'admin_id' => 1,
                'action' => 'Edit Karyawan',
                'action_time' => now(),
            ],
            // Tambahkan aktivitas log admin lainnya sesuai kebutuhan
        ]);
    }
}
