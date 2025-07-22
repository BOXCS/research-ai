<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResearchPublicationSeeder extends Seeder
{
    public function run()
    {
        DB::table('research_publications')->insert([
            // AI Research publications
            [
                'research_product_id' => 1,
                'publication_id' => 1,
            ],
            // Solar Cell Research publications
            [
                'research_product_id' => 2,
                'publication_id' => 2,
            ],
            // Dengue Research publications
            [
                'research_product_id' => 3,
                'publication_id' => 3,
            ],
        ]);
    }
}