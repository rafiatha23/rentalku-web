<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i=1;$i<=10;$i++){
            DB::table("users")->insert([
                "name" => $faker->name(),
                "email" => $faker->safeEmail,
                "password" => Hash::make("user"),
                "telp" => $faker->phoneNumber,
                "alamat" => $faker->address,
            ]);
        }
        
    }
}
