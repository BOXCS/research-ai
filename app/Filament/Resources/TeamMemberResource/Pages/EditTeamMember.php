<?php

namespace App\Filament\Resources\TeamMemberResource\Pages;

use App\Filament\Resources\TeamMemberResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTeamMember extends EditRecord
{
    protected static string $resource = TeamMemberResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // gabungkan pengalaman
        if (!empty($data['experience_years']) || !empty($data['experience_field'])) {
            $years = $data['experience_years'] ?? 0;
            $data['experience'] = "{$years}";
        }

        return $data;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
