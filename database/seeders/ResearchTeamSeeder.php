<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResearchTeamSeeder extends Seeder
{
    public function run()
    {
        DB::table('research_team')->insert([
            // AI Diabetes Project Team
            [
                'research_product_id' => 1,
                'team_member_id' => 1,
                'role' => 'Lead Researcher',
            ],
            [
                'research_product_id' => 1,
                'team_member_id' => 3,
                'role' => 'Data Analyst',
            ],
            // Solar Cell Project Team
            [
                'research_product_id' => 2,
                'team_member_id' => 2,
                'role' => 'Principal Investigator',
            ],
            // Dengue Research Team
            [
                'research_product_id' => 3,
                'team_member_id' => 3,
                'role' => 'Lead Researcher',
            ],
        ]);
    }
}