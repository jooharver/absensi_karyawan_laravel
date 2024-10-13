<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosisiSeeder extends Seeder
{
    public function run()
    {
        DB::table('posisis')->insert([
            ['posisi' => 'Manager'],
            ['posisi' => 'Produksi'],
            ['posisi' => 'Admin'],
            ['posisi' => 'HR'],
            ['posisi' => 'IT Support'],
        ]);
    }
}
