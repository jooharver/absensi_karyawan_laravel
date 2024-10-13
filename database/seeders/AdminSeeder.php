<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('admins')->insert([
            [
                'username' => 'joo',
                'password' => Hash::make('joo'), // Menggunakan Hash untuk keamanan
                'created_at' => now(),
            ],
            [
                'username' => 'rofiq',
                'password' => Hash::make('kontol'),
                'created_at' => now(),
            ],
            [
                'username' => 'daffa',
                'password' => Hash::make('daffa'),
                'created_at' => now(),
            ],
        ]);
    }
}
