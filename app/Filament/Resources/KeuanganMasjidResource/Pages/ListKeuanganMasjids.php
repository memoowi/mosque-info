<?php

namespace App\Filament\Resources\KeuanganMasjidResource\Pages;

use App\Filament\Resources\KeuanganMasjidResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKeuanganMasjids extends ListRecords
{
    protected static string $resource = KeuanganMasjidResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
