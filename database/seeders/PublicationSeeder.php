<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublicationSeeder extends Seeder
{
    public function run()
    {
        DB::table('publications')->insert([
            [
                'title' => 'Deep Learning for Medical Image Analysis: A Review',
                'authors' => 'Lia Adelia, Adam Kyif, Sobal Mo',
                'category_id' => 4, // Journal Article
                'journal' => 'Journal of AI in Medicine',
                'year' => 2023,
                'volume' => '15',
                'issue' => '3',
                'pages' => '245-267',
                'doi' => '10.1016/j.jaim.2023.123456',
                'impact_factor' => 6.7,
                'citation_count' => 24,
                'abstract' => 'Comprehensive review of deep learning applications in medical imaging...',
                'pdf_url' => 'https://example.com/papers/ai_medicine.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Stability Enhancement of Perovskite Solar Cells',
                'authors' => 'Lia Amalia, Oba Kyif, Kepale Mo',
                'category_id' => 4, // Journal Article
                'journal' => 'Advanced Energy Materials',
                'year' => 2022,
                'volume' => '12',
                'issue' => '45',
                'pages' => '2200156',
                'doi' => '10.1002/aenm.202200156',
                'impact_factor' => 9.2,
                'citation_count' => 58,
                'abstract' => 'Novel approach to improve perovskite solar cell stability...',
                'pdf_url' => 'https://example.com/papers/perovskite.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Genomic Diversity of Dengue in Indonesia',
                'authors' => 'Pahinon Amalia, Trobbi Kyif, Monday Mo',
                'category_id' => 5, // Conference Paper
                'journal' => 'Proceedings of the International Conference on Tropical Medicine',
                'year' => 2023,
                'volume' => '2023',
                'issue' => '1',
                'pages' => '112-118',
                'doi' => '10.1145/123456.789012',
                'impact_factor' => 3.1,
                'citation_count' => 7,
                'abstract' => 'First comprehensive study of dengue genomic diversity in Indonesia...',
                'pdf_url' => 'https://example.com/papers/dengue_genomics.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}