<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostTypeResource\Pages;
use App\Filament\Resources\PostTypeResource\RelationManagers;
use App\Models\PostType;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Closure;

/**
 * php artisan make:filament-resource PostType --simple --generate --soft-deletes --view
 */
class PostTypeResource extends Resource
{
    protected static ?string $model = PostType::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-list';

    protected static ?string $navigationGroup = 'Master';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(2)
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->autofocus()
                            ->required()
                            ->maxLength(255)
                            ->reactive()
                            ->unique(table: PostType::class, ignorable: fn ($record) => $record)
                            ->afterStateUpdated(function (Closure $set, $state) {
                                $set('slug', str($state)->slug());
                            }),
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\MarkdownEditor::make('description')
                            ->columnSpan('full'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Tables\Columns\TextColumn::make('uuid'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('slug')
                    ->toggleable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('createdUser.name')
                    ->label('Created By')
                    ->toggleable()
                    ->sortable(),
                // Tables\Columns\TextColumn::make('updated_by'),
                Tables\Columns\TextColumn::make('created_at')
                    ->toggleable()
                    ->sortable()
                    ->date(),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime(),
                // Tables\Columns\TextColumn::make('deleted_at')
                //     ->dateTime(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePostTypes::route('/'),
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
