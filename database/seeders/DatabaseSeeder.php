<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Memanggil seeder lain di sini
        $this->call([
            PosisiSeeder::class,
            KaryawanSeeder::class, // Pastikan KaryawanSeeder ada dan di-import dengan benar
            AdminSeeder::class,
            AdminActivityLogSeeder::class // Jika ada seeder lain, tambahkan di sini
            // Tambahkan seeder lain yang diperlukan
        ]);
    }
}
