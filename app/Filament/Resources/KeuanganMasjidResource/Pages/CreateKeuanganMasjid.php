<?php

namespace App\Filament\Resources\KeuanganMasjidResource\Pages;

use App\Filament\Resources\KeuanganMasjidResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateKeuanganMasjid extends CreateRecord
{
    protected static string $resource = KeuanganMasjidResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Berhasil Ditambahkan')
            ->body('Data Keuangan Masjid berhasil ditambahkan');
    }
}
