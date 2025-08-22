<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommunityProgramResource\Pages;
use App\Models\CommunityProgram;
use App\Models\CommunityService;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CommunityProgramResource extends Resource
{
    protected static ?string $model = CommunityService::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Pengabdian Masyarakat';
    protected static ?string $pluralModelLabel = 'Pengabdian Masyarakat';
    protected static ?string $navigationGroup = 'Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('description')
                    ->label('Deskripsi')
                    ->rows(3),

                Forms\Components\FileUpload::make('image')
                    ->label('Gambar')
                    ->directory('community-programs')
                    ->image()
                    ->disk('public'),

                Forms\Components\TextInput::make('target_audience')
                    ->label('Target Audiens')
                    ->maxLength(255),

                Forms\Components\DatePicker::make('tgl_mulai')
                    ->label('Tanggal Mulai')
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set, callable $get) {
                        $tglSelesai = $get('tgl_selesai');
                        if ($state && $tglSelesai) {
                            $days = \Carbon\Carbon::parse($state)->diffInDays(\Carbon\Carbon::parse($tglSelesai)) + 1;
                            $set('duration', $days . ' hari');
                        }

                        // Hitung status
                        $today = now();
                        if ($state && $tglSelesai) {
                            if ($today->lt(\Carbon\Carbon::parse($state))) {
                                $set('status', 'Planned');
                            } elseif ($today->between(\Carbon\Carbon::parse($state), \Carbon\Carbon::parse($tglSelesai))) {
                                $set('status', 'Ongoing');
                            } elseif ($today->gt(\Carbon\Carbon::parse($tglSelesai))) {
                                $set('status', 'Completed');
                            }
                        }
                    }),

                Forms\Components\DatePicker::make('tgl_selesai')
                    ->label('Tanggal Selesai')
                    ->reactive()
                    ->after('tgl_mulai')
                    ->afterStateUpdated(function ($state, callable $set, callable $get) {
                        $tglMulai = $get('tgl_mulai');
                        if ($tglMulai && $state) {
                            $days = \Carbon\Carbon::parse($tglMulai)->diffInDays(\Carbon\Carbon::parse($state)) + 1;
                            $set('duration', $days . ' hari');
                        }

                        // Hitung status
                        $today = now();
                        if ($tglMulai && $state) {
                            if ($today->lt(\Carbon\Carbon::parse($tglMulai))) {
                                $set('status', 'Planned');
                            } elseif ($today->between(\Carbon\Carbon::parse($tglMulai), \Carbon\Carbon::parse($state))) {
                                $set('status', 'Ongoing');
                            } elseif ($today->gt(\Carbon\Carbon::parse($state))) {
                                $set('status', 'Completed');
                            }
                        }
                    }),

                Forms\Components\TextInput::make('duration')
                    ->label('Durasi')
                    ->readOnly(),

                Forms\Components\TextInput::make('participants')
                    ->label('Jumlah Peserta')
                    ->numeric(),

                Forms\Components\TextInput::make('location')
                    ->label('Lokasi')
                    ->maxLength(255),

                    Forms\Components\TextInput::make('status')
                    ->label('Status')
                    ->readOnly(),

                Forms\Components\Textarea::make('impact')
                    ->label('Dampak')
                    ->rows(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Judul')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('tgl_mulai')->label('Mulai')->date(),
                Tables\Columns\TextColumn::make('tgl_selesai')->label('Selesai')->date(),
                Tables\Columns\TextColumn::make('participants')->label('Peserta'),
                Tables\Columns\BadgeColumn::make('status')->colors([
                    'success' => 'Completed',
                    'warning' => 'Ongoing',
                    'danger' => 'Planned',
                ]),
            ])
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
            'index' => Pages\ListCommunityPrograms::route('/'),
            'create' => Pages\CreateCommunityProgram::route('/create'),
            'edit' => Pages\EditCommunityProgram::route('/{record}/edit'),
        ];
    }
}
