<?php

namespace App\Filament\Resources\CommunityProgramResource\Pages;

use App\Filament\Resources\CommunityProgramResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCommunityPrograms extends ListRecords
{
    protected static string $resource = CommunityProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
