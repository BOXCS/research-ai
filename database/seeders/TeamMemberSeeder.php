<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamMemberSeeder extends Seeder
{
    public function run()
    {
        DB::table('team_members')->insert([
            [
                'name' => 'Dr. Sarah Wijaya',
                'position' => 'Lead Researcher',
                'specialization' => 'Machine Learning, Computer Vision',
                'education' => 'Ph.D in Computer Science, Stanford University',
                'experience' => '10 years in AI research',
                'image' => 'sarah.jpg',
                'email' => 'sarah@university.edu',
                'linkedin' => 'linkedin.com/in/sarahwijaya',
                'google_scholar' => 'scholar.google.com/citations?user=sarah123',
                'publications' => 45,
                'h_index' => 12,
                'bio' => 'Expert in machine learning with focus on healthcare applications.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Prof. Bambang Susanto',
                'position' => 'Senior Researcher',
                'specialization' => 'Renewable Energy, Solar Cells',
                'education' => 'Ph.D in Material Science, MIT',
                'experience' => '15 years in energy research',
                'image' => 'bambang.jpg',
                'email' => 'bambang@university.edu',
                'linkedin' => 'linkedin.com/in/bambangsusanto',
                'google_scholar' => 'scholar.google.com/citations?user=bambang456',
                'publications' => 78,
                'h_index' => 24,
                'bio' => 'Pioneer in perovskite solar cell technology in Indonesia.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dr. Ani Rahmawati',
                'position' => 'Researcher',
                'specialization' => 'Bioinformatics, Genomics',
                'education' => 'Ph.D in Bioinformatics, University of Tokyo',
                'experience' => '7 years in biotechnology',
                'image' => 'ani.jpg',
                'email' => 'ani@university.edu',
                'linkedin' => 'linkedin.com/in/anirahmawati',
                'google_scholar' => 'scholar.google.com/citations?user=ani789',
                'publications' => 32,
                'h_index' => 9,
                'bio' => 'Specialized in genomic data analysis for tropical diseases.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}