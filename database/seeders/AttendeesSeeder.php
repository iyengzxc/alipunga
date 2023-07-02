<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'age' => Str::random(10),
            'address' => Str::random(40),
            'username' => Str::random(10),
            'password' => Hash::make('password'),
        ]);
    }
}
