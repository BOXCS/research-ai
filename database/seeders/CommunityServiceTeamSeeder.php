<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommunityServiceTeamSeeder extends Seeder
{
    public function run()
    {
        DB::table('community_service_team')->insert([
            // Digital Literacy Team
            [
                'community_service_id' => 1,
                'team_member_id' => 1,
                'role' => 'Program Coordinator',
            ],
            // Renewable Energy Workshop Team
            [
                'community_service_id' => 2,
                'team_member_id' => 2,
                'role' => 'Technical Expert',
            ],
            [
                'community_service_id' => 2,
                'team_member_id' => 3,
                'role' => 'Community Liaison',
            ],
            // Health Screening Team
            [
                'community_service_id' => 3,
                'team_member_id' => 1,
                'role' => 'Medical Coordinator',
            ],
            [
                'community_service_id' => 3,
                'team_member_id' => 3,
                'role' => 'Data Manager',
            ],
        ]);
    }
}