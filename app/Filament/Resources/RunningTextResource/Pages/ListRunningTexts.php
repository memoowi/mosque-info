<?php

namespace App\Filament\Resources\RunningTextResource\Pages;

use App\Filament\Resources\RunningTextResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRunningTexts extends ListRecords
{
    protected static string $resource = RunningTextResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
