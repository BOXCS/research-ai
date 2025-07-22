<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // database/seeders/DatabaseSeeder.php
public function run()
{
    $this->call([
        CategorySeeder::class,
        TeamMemberSeeder::class,
        ResearchProductSeeder::class,
        PublicationSeeder::class,
        AuthorSeeder::class,
        PublicationAuthorSeeder::class,
        CommunityServiceSeeder::class,
        ResearchTeamSeeder::class,
        CommunityServiceTeamSeeder::class,
        ResearchPublicationSeeder::class,
    ]);
}
}
