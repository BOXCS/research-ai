<?php

namespace App\Filament\Resources\ResearchProductResource\Pages;

use App\Filament\Resources\ResearchProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditResearchProduct extends EditRecord
{
    protected static string $resource = ResearchProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
