<?php

namespace App\Filament\Resources\JadwalJumatResource\Pages;

use App\Filament\Resources\JadwalJumatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJadwalJumats extends ListRecords
{
    protected static string $resource = JadwalJumatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
