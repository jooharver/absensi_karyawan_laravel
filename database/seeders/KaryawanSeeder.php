<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            DB::table('karyawans')->insert([
                'nik' => $this->generateNIK(),
                'nama' => $faker->name,
                'tanggal_lahir' => $faker->date,
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'alamat' => $faker->address,
                'agama' => $faker->randomElement(['Islam', 'Kristen', 'Hindu', 'Buddha', 'Konghucu']),
                'no_telepon' => $this->generateRandomPhoneNumber(),
                'email' => $faker->unique()->safeEmail,
                'tanggal_masuk' => now(),
                'id_posisi' => rand(1, 5), // Misalkan posisi id dari 1 sampai 5
            ]);
        }
    }

    /**
     * Generate a random NIK (16 digits)
     *
     * @return string
     */
    private function generateNIK()
    {
        return sprintf('%016d', rand(0, 9999999999999999));
    }

    /**
     * Generate a random phone number with 15 digits
     *
     * @return string
     */
    private function generateRandomPhoneNumber()
    {
        return sprintf('08%s', rand(1000000000, 9999999999)); // Awali dengan '08' dan 13 angka acak
    }
}
