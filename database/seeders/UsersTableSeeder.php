<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $users = [];
        $faker = Factory::create();
        $i;

        for($i = 1; $i <= 10; $i++){
            $users [] = [
                'name'              => $faker->name,
                'user_role'         => $faker->randomElement($array = array('admin', 'customer')),
                'email'             => $faker->email,
                'email_verified_at' => $faker->dateTime(),
                'password'          => $faker->password
            ];

        }
        DB::table("users")->insert($users);
    }
}