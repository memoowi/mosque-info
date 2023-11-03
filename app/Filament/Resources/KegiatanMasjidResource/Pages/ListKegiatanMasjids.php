<?php

namespace App\Filament\Resources\KegiatanMasjidResource\Pages;

use App\Filament\Resources\KegiatanMasjidResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKegiatanMasjids extends ListRecords
{
    protected static string $resource = KegiatanMasjidResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
