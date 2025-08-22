<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResearchProductResource\Pages;
use App\Models\ResearchProduct;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ResearchProductResource extends Resource
{
    protected static ?string $model = ResearchProduct::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Data';
    protected static ?string $navigationLabel = 'Research Products';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Title')
                    ->required(),

                Forms\Components\Textarea::make('description')
                    ->label('Description')
                    ->rows(4),

                    Forms\Components\Select::make('category_id')
                    ->label('Kategori')
                    ->options(Category::where('type', 'research')->pluck('name', 'id'))
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->label('Nama Kategori')
                            ->required(),
                        Forms\Components\Hidden::make('type')->default('research'),
                    ])
                    ->createOptionUsing(function (array $data): int {
                        $category = Category::create($data);
                        return $category->id; // return id supaya langsung ke-select
                    }),
                

                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->options([
                        'Active' => 'Active',
                        'Completed' => 'Completed',
                        'On Hold' => 'On Hold',
                    ])
                    ->default('Active'),

                Forms\Components\DatePicker::make('tgl_mulai')
                    ->label('Tanggal Mulai')
                    ->required(),

                Forms\Components\DatePicker::make('tgl_selesai')
                    ->label('Tanggal Selesai'),

                Forms\Components\FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->directory('research-products'),

                Forms\Components\TextInput::make('video_url')
                    ->label('Video URL')
                    ->url()
                    ->prefix('https://'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('category.name')->label('Category')->sortable(),
                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'success' => 'Active',
                        'danger' => 'Completed',
                        'warning' => 'On Hold',
                    ]),
                Tables\Columns\TextColumn::make('tgl_mulai')->date(),
                Tables\Columns\TextColumn::make('tgl_selesai')->date(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')->options([
                    'Active' => 'Active',
                    'Completed' => 'Completed',
                    'On Hold' => 'On Hold',
                ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListResearchProducts::route('/'),
            'create' => Pages\CreateResearchProduct::route('/create'),
            'edit' => Pages\EditResearchProduct::route('/{record}/edit'),
        ];
    }
}
