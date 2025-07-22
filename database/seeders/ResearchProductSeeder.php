<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResearchProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('research_products')->insert([
            [
                'title' => 'AI for Early Diabetes Detection',
                'description' => 'Developing machine learning models to detect diabetes risk from retinal images.',
                'category_id' => 1, // AI
                'status' => 'Active',
                'tgl_mulai' => '2023-01-15',
                'tgl_selesai' => '2024-12-31',
                'image' => 'diabetes_ai.jpg',
                'video_url' => 'https://youtu.be/example1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Perovskite Solar Cell Optimization',
                'description' => 'Research on improving stability and efficiency of perovskite solar cells.',
                'category_id' => 2, // Renewable Energy
                'status' => 'Completed',
                'tgl_mulai' => '2022-03-01',
                'tgl_selesai' => '2023-06-30',
                'image' => 'solar_cell.jpg',
                'video_url' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Genomic Analysis of Dengue Virus',
                'description' => 'Studying genomic variations of dengue virus strains in Southeast Asia.',
                'category_id' => 3, // Biotechnology
                'status' => 'On Hold',
                'tgl_mulai' => '2023-05-10',
                'tgl_selesai' => '2025-05-09',
                'image' => 'dengue_genome.jpg',
                'video_url' => 'https://youtu.be/example2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}