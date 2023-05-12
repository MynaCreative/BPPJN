<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Filament\Resources\GalleryResource\RelationManagers;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Closure;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-photograph';

    protected static ?string $navigationGroup = 'Media';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Grid::make()
                            ->schema([

                                Forms\Components\TextInput::make('name')
                                    ->autofocus()
                                    ->required()
                                    ->maxLength(255)
                                    ->reactive()
                                    ->unique(table: Gallery::class, ignorable: fn ($record) => $record)
                                    ->afterStateUpdated(function (Closure $set, $state) {
                                        $set('slug', str($state)->slug());
                                    }),
                                Forms\Components\TextInput::make('slug')
                                    ->required()
                                    ->maxLength(255),
                                TinyEditor::make('body')->profile('content')
                                    ->required()
                                    ->columnSpan('full'),
                                Forms\Components\DatePicker::make('published_at'),
                                Forms\Components\Toggle::make('is_active')
                                    ->inline(false)
                                    ->default(true)
                                    ->required(),
                            ]),
                    ])->columnSpan(8),
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\FileUpload::make('thumbnail')
                            ->directory('gallery'),
                        Forms\Components\TextInput::make('meta_title')
                            ->maxLength(255),
                        Forms\Components\Textarea::make('meta_description')
                            ->maxLength(255),
                    ])->columnSpan(4),
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Repeater::make('galleryImages')
                            ->relationship()
                            ->schema([
                                Forms\Components\FileUpload::make('thumbnail')
                                    ->directory('gallery-image')
                                    ->required(),
                                Forms\Components\TextInput::make('description')
                                    ->required()
                            ])
                            ->orderable('sequence')
                            ->collapsible()
                            ->defaultItems(0)
                            ->columns(2)
                    ])->columnSpan(12),
            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail'),
                Tables\Columns\TextColumn::make('name')
                    ->words(5, '...')
                    ->searchable(['name', 'body'])
                    ->toggleable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('slug')->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('body'),

                // Tables\Columns\TextColumn::make('meta_title'),
                // Tables\Columns\TextColumn::make('meta_description'),
                Tables\Columns\TextColumn::make('published_at')
                    ->sortable()
                    ->date(),
                Tables\Columns\TextColumn::make('created_at')
                    ->date(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->date(),
                Tables\Columns\TextColumn::make('createdUser.name')
                    ->label('Created By')
                    ->toggleable()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->sortable()
                    ->boolean(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'view' => Pages\ViewGallery::route('/{record}'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}