<?php

namespace App\Filament\Resources\TeamMemberResource\Pages;

use App\Filament\Resources\TeamMemberResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTeamMember extends CreateRecord
{
    protected static string $resource = TeamMemberResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // gabungkan pengalaman
        if (!empty($data['experience_years']) || !empty($data['experience_field'])) {
            $years = $data['experience_years'] ?? 0;
            $field = $data['experience_field'] ?? '';
            $data['experience'] = "{$years} tahun di {$field}";
        }

        return $data;
    }
}
