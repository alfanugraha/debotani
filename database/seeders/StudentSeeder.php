<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        for ($i=1; $i < 10; $i++) { 
            DB::table('students')->insert([
                'nama' => $faker->name,
                'nrp' => $faker->numberBetween(33333333, 99999999),
                'email' => $faker->email,
                'jurusan' => $faker->jobTitle 
            ]);
        } 
    }
}
