<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublicationAuthorSeeder extends Seeder
{
    public function run()
    {
        DB::table('author_publication')->insert([
            // First publication (3 authors)
            [
                'publication_id' => 1,
                'author_id' => 1,
                'author_order' => 1,
            ],
            [
                'publication_id' => 1,
                'author_id' => 4,
                'author_order' => 2,
            ],
            [
                'publication_id' => 1,
                'author_id' => 5,
                'author_order' => 3,
            ],
            // Second publication (2 authors)
            [
                'publication_id' => 2,
                'author_id' => 2,
                'author_order' => 1,
            ],
            [
                'publication_id' => 2,
                'author_id' => 1,
                'author_order' => 2,
            ],
            // Third publication (1 author)
            [
                'publication_id' => 3,
                'author_id' => 3,
                'author_order' => 1,
            ],
        ]);
    }
}