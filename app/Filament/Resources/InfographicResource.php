<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InfographicResource\Pages;
use App\Filament\Resources\InfographicResource\RelationManagers;
use App\Models\Infographic;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Closure;

class InfographicResource extends Resource
{
    protected static ?string $model = Infographic::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-report';

    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\TextInput::make('uuid')
                //     ->required()
                //     ->maxLength(36),
                Forms\Components\TextInput::make('name')
                    ->autofocus()
                    ->required()
                    ->maxLength(255)
                    ->reactive()
                    ->unique(table: Infographic::class, ignorable: fn ($record) => $record)
                    ->afterStateUpdated(function (Closure $set, $state) {
                        $set('slug', str($state)->slug());
                    }),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('url')
                    ->columnSpan('full'),
                Forms\Components\RichEditor::make('description')
                    ->columnSpan('full'),
                Forms\Components\FileUpload::make('thumbnail')
                    ->directory('infographic')
                    ->columnSpan('full'),
                // Forms\Components\TextInput::make('created_by'),
                // Forms\Components\TextInput::make('updated_by'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Tables\Columns\TextColumn::make('uuid'),
                Tables\Columns\ImageColumn::make('thumbnail'),
                Tables\Columns\TextColumn::make('name'),
                // Tables\Columns\TextColumn::make('slug'),
                // Tables\Columns\TextColumn::make('url'),
                // Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('created_at')
                    ->date(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->date(),
                Tables\Columns\TextColumn::make('createdUser.name')
                    ->label('Created By')
                    ->toggleable()
                    ->sortable(),
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
            'index' => Pages\ManageInfographics::route('/'),
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
