<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i <= 2; $i++)
        {
            $faker = Faker::create();
            $name = $faker->name;
            $email = $faker->unique()->safeEmail;
            $password = bcrypt("password");
            $address = $faker->address();
            $full_name = $faker->name;
            $created_at = Date::now();
            $updated_at = Date::now();

            $data[$i] = [
                'username' => $name,
                'email' => $email,
                'password' => $password,
                'address' => $address,
                'full_name' => $full_name,
                "created_at" => $created_at,
                "updated_at" => $updated_at
            ];
        }
        DB::table('users')->insert($data);
    }
}
