<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->updateOrInsert(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'EM Building Contractors',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'mobile' => '9347883784',
                'user_type' => 'ADMIN',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
