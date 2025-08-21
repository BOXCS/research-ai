<?php

namespace App\Filament\Resources\CommunityProgramResource\Pages;

use App\Filament\Resources\CommunityProgramResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCommunityProgram extends EditRecord
{
    protected static string $resource = CommunityProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
