<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommunityServiceSeeder extends Seeder
{
    public function run()
    {
        DB::table('community_services')->insert([
            [
                'title' => 'Digital Literacy for Rural Teachers',
                'description' => 'Training program to improve digital skills for teachers in rural areas.',
                'image' => 'digital_literacy.jpg',
                'target_audience' => 'Teachers',
                'tgl_mulai' => '2023-02-01',
                'tgl_selesai' => '2023-05-31',
                'participants' => 120,
                'location' => 'West Java',
                'duration' => '4 months',
                'status' => 'Completed',
                'impact' => 'Improved digital teaching skills for 120 teachers across 30 schools',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Renewable Energy Workshop',
                'description' => 'Community education about solar panel installation and maintenance.',
                'image' => 'solar_workshop.jpg',
                'target_audience' => 'Village Communities',
                'tgl_mulai' => '2023-07-15',
                'tgl_selesai' => '2023-12-15',
                'participants' => 250,
                'location' => 'East Nusa Tenggara',
                'duration' => '5 months',
                'status' => 'Ongoing',
                'impact' => 'Installed 50 solar panels in 10 villages',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Health Screening Campaign',
                'description' => 'Free health screening and education for urban poor communities.',
                'image' => 'health_screening.jpg',
                'target_audience' => 'Urban Poor Communities',
                'tgl_mulai' => '2023-09-01',
                'tgl_selesai' => '2023-09-30',
                'participants' => 500,
                'location' => 'Jakarta',
                'duration' => '1 month',
                'status' => 'Planned',
                'impact' => 'Expected to screen 500 people for diabetes and hypertension',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}