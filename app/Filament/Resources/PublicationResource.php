<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PublicationResource\Pages;
use App\Models\Publication;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PublicationResource extends Resource
{
    protected static ?string $model = Publication::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationLabel = 'Publications';
    protected static ?string $pluralModelLabel = 'Publications';
    protected static ?string $navigationGroup = 'Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                // Authors bisa pakai repeater agar lebih fleksibel
                Forms\Components\Repeater::make('authors')
                    ->schema([
                        Forms\Components\TextInput::make('name')->label('Author Name'),
                    ])
                    ->collapsed()
                    ->columns(1)
                    ->createItemButtonLabel('Add Author')
                    ->defaultItems(1)
                    ->label('Authors')
                    ->required(),

                Forms\Components\TextInput::make('journal')->maxLength(255),
                Forms\Components\TextInput::make('year')->numeric(),

                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->label('Category'),

                Forms\Components\TextInput::make('volume')->maxLength(50),
                Forms\Components\TextInput::make('issue')->maxLength(50),
                Forms\Components\TextInput::make('pages')->maxLength(50),
                Forms\Components\TextInput::make('doi')->maxLength(255),
                Forms\Components\TextInput::make('pdf_url')->url(),

                Forms\Components\TextInput::make('impact_factor')->numeric()->step(0.1),
                Forms\Components\TextInput::make('citation_count')->numeric(),

                Forms\Components\Textarea::make('abstract')->rows(5),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('journal')->sortable(),
                Tables\Columns\TextColumn::make('year')->sortable(),
                Tables\Columns\TextColumn::make('category.name')->label('Category'),
                Tables\Columns\TextColumn::make('impact_factor'),
                Tables\Columns\TextColumn::make('citation_count'),
                Tables\Columns\TextColumn::make('created_at')->date(),
            ])
            ->filters([
                //
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPublications::route('/'),
            'create' => Pages\CreatePublication::route('/create'),
            'edit' => Pages\EditPublication::route('/{record}/edit'),
        ];
    }
}
