<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;
use Faker\Factory as Faker;

class RahmahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i < 50; $i++) {
            DB::table('rahmahs')->insert([
                'no_cif_no_rekening' => $faker->numberBetween(33333333, 99999999),
                'nama_nasabah' => $faker->name,
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->dateTimeThisCentury->format('Y-m-d'),
                'alamat_1' => $faker->address,
                'email' => $faker->email,
            ]);
        }
    }
}
