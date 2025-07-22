<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    public function run()
    {
        DB::table('authors')->insert([
            [
                'name' => 'Sarah Wijaya',
                'institution' => 'National University',
                'email' => 'sarah@university.edu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bambang Susanto',
                'institution' => 'National University',
                'email' => 'bambang@university.edu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ani Rahmawati',
                'institution' => 'National University',
                'email' => 'ani@university.edu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Michael Chen',
                'institution' => 'Stanford University',
                'email' => 'michael@stanford.edu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Yuki Tanaka',
                'institution' => 'University of Tokyo',
                'email' => 'yuki@tokyo.ac.jp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}