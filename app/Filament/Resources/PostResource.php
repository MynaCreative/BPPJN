<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostType;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Closure;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        $options = self::treeOptions(PostCategory::all());
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
                                    ->unique(table: Post::class, ignorable: fn ($record) => $record)
                                    ->afterStateUpdated(function (Closure $set, $state) {
                                        $set('slug', str($state)->slug());
                                    }),
                                Forms\Components\TextInput::make('slug')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\Select::make('postType')
                                    ->required()
                                    ->relationship('postType', 'name'),
                                Forms\Components\DatePicker::make('published_at'),
                                TinyEditor::make('body')->profile('content')
                                    ->required()
                                    ->columnSpan('full'),
                                Forms\Components\Select::make('postCategories')
                                    ->multiple()
                                    ->searchable()
                                    ->preload()
                                    ->relationship('postCategories', 'name'),
                                // ->options($options),
                                Forms\Components\Toggle::make('is_active')
                                    ->inline(false)
                                    ->default(true)
                                    ->required(),
                            ]),
                    ])->columnSpan(8),
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\FileUpload::make('thumbnail')
                            ->directory('post'),
                        Forms\Components\TextInput::make('meta_title')
                            ->maxLength(255),
                        Forms\Components\Textarea::make('meta_description')
                            ->maxLength(255),
                    ])->columnSpan(4),
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Repeater::make('postImages')
                            ->relationship()
                            ->schema([
                                Forms\Components\FileUpload::make('thumbnail')
                                    ->directory('post-image')
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

    private static function treeOptions($categories, $parent_id = null, $level = 0)
    {
        $options = [];

        foreach ($categories as $category) {
            if ($category->parent_id == $parent_id) {
                $prefix = str_repeat('-', $level * 2);
                $options[$category->id] = $prefix . $category->name;
                $options += self::treeOptions($categories, $category->id, $level + 1);
            }
        }

        return $options;
    }

    public static function table(Table $table): Table
    {
        $postTypes = PostType::pluck('name', 'name');
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail'),
                Tables\Columns\TextColumn::make('postType.name')->toggleable(),
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
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->date(),
                Tables\Columns\TextColumn::make('created_at')
                    ->date(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->date(),
                Tables\Columns\TextColumn::make('createdUser.name')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Created By')
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->sortable()
                    ->boolean(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
                Tables\Filters\Filter::make('created_at')
                    ->form([
                        Forms\Components\Select::make('post_type')
                            ->required()
                            ->options($postTypes),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['post_type'],
                                fn (Builder $query, $value): Builder => $query->whereRelation('postType', 'name', $value),
                            );
                    })
                    ->indicateUsing(function (array $data): array {
                        $indicators = [];
                        if ($data['post_type'] ?? null) {
                            $indicators['post_type'] = 'Post Type : ' . $data['post_type'];
                        }

                        return $indicators;
                    }),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
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
