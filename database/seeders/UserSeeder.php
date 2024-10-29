<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'user_id' => 1,
                'name' => 'Admin',
                'email' => 'ad@min.com',
                'password' => Hash::make('asdasd'),
                'role_fk' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'name' => 'Common user',
                'email' => 'common@user.com',
                'password' => Hash::make('password123'),
                'role_fk' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

