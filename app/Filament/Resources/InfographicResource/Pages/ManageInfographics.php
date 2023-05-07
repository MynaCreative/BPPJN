<?php

namespace App\Filament\Resources\InfographicResource\Pages;

use App\Filament\Resources\InfographicResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageInfographics extends ManageRecords
{
    protected static string $resource = InfographicResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
