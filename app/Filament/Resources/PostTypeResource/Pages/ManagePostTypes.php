<?php

namespace App\Filament\Resources\PostTypeResource\Pages;

use App\Filament\Resources\PostTypeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePostTypes extends ManageRecords
{
    protected static string $resource = PostTypeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
