<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run() {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123'),
                'email_verified_at' => now(),
                'usertype' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Company1',
                'email' => 'company@gmail.com',
                'password' => Hash::make('123'),
                'email_verified_at' => now(),
                'usertype' => 'company',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Candidate1',
                'email' => 'candidate1@gmail.com',
                'password' => Hash::make('123'),
                'email_verified_at' => now(),
                'usertype' => 'candidate',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
