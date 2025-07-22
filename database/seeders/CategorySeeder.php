<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            // Research categories
            [
                'name' => 'Artificial Intelligence',
                'type' => 'research',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Renewable Energy',
                'type' => 'research',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Biotechnology',
                'type' => 'research',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Publication categories
            [
                'name' => 'Journal Article',
                'type' => 'publication',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Conference Paper',
                'type' => 'publication',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Book Chapter',
                'type' => 'publication',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}