<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Publication;

class UpdatePublicationMetrics extends Command
{
    protected $signature = 'update:metrics';
    protected $description = 'Update citation count and impact factor for all publications';

    public function handle()
    {
        $publications = Publication::all();

        foreach ($publications as $pub) {
            $this->info("Updating: " . $pub->title);

            $input = json_encode([
                'title' => $pub->title,
                'journal' => $pub->journal,
            ]);

            $command = "python3 resources/scripts/scraper.py " . escapeshellarg($input);
            $output = shell_exec($command);
            $metrics = json_decode($output, true);

            if ($metrics) {
                $pub->citation_count = $metrics['citation_count'] ?? $pub->citation_count;
                $pub->impact_factor = $metrics['impact_factor'] ?? $pub->impact_factor;
                $pub->save();

                $this->info("→ Citations: {$pub->citation_count}, Impact Factor: {$pub->impact_factor}");
            } else {
                $this->warn("→ Failed to retrieve metrics.");
            }
        }

        $this->info("Done.");
    }
}
