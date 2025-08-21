<?php

namespace App\Filament\Resources\ResearchProductResource\Pages;

use App\Filament\Resources\ResearchProductResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListResearchProducts extends ListRecords
{
    protected static string $resource = ResearchProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
