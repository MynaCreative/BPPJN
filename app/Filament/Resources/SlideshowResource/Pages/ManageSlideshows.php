<?php

namespace App\Filament\Resources\SlideshowResource\Pages;

use App\Filament\Resources\SlideshowResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageSlideshows extends ManageRecords
{
    protected static string $resource = SlideshowResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
