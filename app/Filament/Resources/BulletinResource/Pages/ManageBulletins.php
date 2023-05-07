<?php

namespace App\Filament\Resources\BulletinResource\Pages;

use App\Filament\Resources\BulletinResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageBulletins extends ManageRecords
{
    protected static string $resource = BulletinResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
