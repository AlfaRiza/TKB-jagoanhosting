<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => Str::random(10),
            'lastname' => Str::random(10),
            'gender' => 'male',
            'status' => 'Active',
            'email' => Str::random(10).'@gmail.com',
            'city' => Str::random(10),
            'address' => Str::random(20),
            'phone' => '08328327727',
        ]);
        DB::table('users')->insert([
            'firstname' => Str::random(10),
            'lastname' => Str::random(10),
            'gender' => 'female',
            'status' => 'Active',
            'email' => Str::random(10).'@gmail.com',
            'city' => Str::random(10),
            'address' => Str::random(20),
            'phone' => '08328327727',
        ]);
        DB::table('users')->insert([
            'firstname' => Str::random(10),
            'lastname' => Str::random(10),
            'gender' => 'male',
            'status' => 'Pending',
            'email' => Str::random(10).'@gmail.com',
            'city' => Str::random(10),
            'address' => Str::random(20),
            'phone' => '08328327727',
        ]);
        DB::table('users')->insert([
            'firstname' => Str::random(10),
            'lastname' => Str::random(10),
            'gender' => 'male',
            'status' => 'Banned',
            'email' => Str::random(10).'@gmail.com',
            'city' => Str::random(10),
            'address' => Str::random(20),
            'phone' => '08328327727',
        ]);
        DB::table('users')->insert([
            'firstname' => Str::random(10),
            'lastname' => Str::random(10),
            'gender' => 'male',
            'status' => 'Loss',
            'email' => Str::random(10).'@gmail.com',
            'city' => Str::random(10),
            'address' => Str::random(20),
            'phone' => '08328327727',
        ]);
    }
}
