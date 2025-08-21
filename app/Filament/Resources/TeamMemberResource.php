<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamMemberResource\Pages;
use App\Models\TeamMember;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TeamMemberResource extends Resource
{
    protected static ?string $model = TeamMember::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Team Members';
    protected static ?string $navigationGroup = 'Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nama')
                    ->required(),

                Forms\Components\TextInput::make('position')
                    ->label('Posisi')
                    ->required(),

                Forms\Components\TextInput::make('specialization')
                    ->label('Spesialisasi'),

                Forms\Components\TextInput::make('education')
                    ->label('Pendidikan'),

                Forms\Components\Fieldset::make('Pengalaman')
                    ->schema([
                        Forms\Components\TextInput::make('experience_years')
                            ->numeric()
                            ->minValue(0)
                            ->maxValue(100)
                            ->label('Tahun'),
                        Forms\Components\TextInput::make('experience_field')
                            ->label('Bidang'),
                    ])
                    ->columns(2),

                Forms\Components\TextInput::make('email')
                    ->email(),

                Forms\Components\TextInput::make('linkedin')
                    ->url(),

                Forms\Components\TextInput::make('google_scholar')
                    ->url(),

                Forms\Components\TextInput::make('publications')
                    ->label('Publikasi'),

                Forms\Components\TextInput::make('h_index')
                    ->label('H-Index'),

                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->directory('team-members')
                    ->maxSize(2048),

                Forms\Components\Textarea::make('bio')
                    ->label('Bio')
                    ->rows(5),
            ])
            ->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Foto')
                    ->circular(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('position'),
                Tables\Columns\TextColumn::make('specialization')
                    ->limit(30),
                Tables\Columns\TextColumn::make('email')
                    ->copyable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTeamMembers::route('/'),
            'create' => Pages\CreateTeamMember::route('/create'),
            'edit' => Pages\EditTeamMember::route('/{record}/edit'),
        ];
    }
}
