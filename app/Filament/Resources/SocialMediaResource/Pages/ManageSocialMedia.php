<?php

namespace App\Filament\Resources\SocialMediaResource\Pages;

use App\Filament\Resources\SocialMediaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageSocialMedia extends ManageRecords
{
    protected static string $resource = SocialMediaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
