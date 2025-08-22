<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamMemberResource\Pages;
use App\Models\TeamMember;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

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
                    ->placeholder('Masukkan nama lengkap')
                    ->required(),

                Forms\Components\TextInput::make('position')
                    ->label('Posisi')
                    ->placeholder('Contoh: Lektor Kepala, Tim Developer, Tim Desain')
                    ->required(),

                Forms\Components\TextInput::make('specialization')
                    ->label('Spesialisasi')
                    ->placeholder('Contoh: Web Development'),

                Forms\Components\TextInput::make('education')
                    ->label('Pendidikan')
                    ->placeholder('Contoh: S3'),

                    Forms\Components\TextInput::make('experience_years')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(100)
                    ->label('Tahun Pengalaman')
                    ->placeholder('Contoh: 5')
                    ->dehydrateStateUsing(fn ($state) => $state ? "{$state} Tahun Pengalaman" : null)
                    ->afterStateHydrated(function ($component, $state) {
                        // Supaya saat edit, hanya angka tahun yang muncul
                        if ($state && preg_match('/(\d+)/', $state, $matches)) {
                            $component->state($matches[1]);
                        }
                    })
                    ->required(),                

                Forms\Components\TextInput::make('email')
                    ->email()
                    ->placeholder('contoh@email.com'),

                Forms\Components\TextInput::make('linkedin')
                    ->url()
                    ->placeholder('https://linkedin.com/in/...'),

                Forms\Components\TextInput::make('google_scholar')
                    ->url()
                    ->placeholder('https://scholar.google.com/...'),

                Forms\Components\TextInput::make('publications')
                    ->label('Publikasi')
                    ->placeholder('Jumlah publikasi'),

                Forms\Components\TextInput::make('h_index')
                    ->label('H-Index')
                    ->placeholder('Contoh: 10'),

                    Forms\Components\FileUpload::make('image')
                    ->image()
                    ->directory('team-members')
                    ->disk('public')
                    ->maxSize(2048)
                    ->getUploadedFileNameForStorageUsing(function ($file) {
                        return Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME))
                            . '.' . $file->getClientOriginalExtension();
                    }),
                

                Forms\Components\Textarea::make('bio')
                    ->label('Bio')
                    ->rows(5)
                    ->placeholder('Tuliskan deskripsi singkat tentang anggota tim'),
            ])
            ->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Foto')
                    ->circular()
                    ->disk('public'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('position'),
                Tables\Columns\TextColumn::make('specialization')
                    ->limit(30),
                Tables\Columns\TextColumn::make('email')
                    ->copyable(),
            ])
            ->reorderable('priority')
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
