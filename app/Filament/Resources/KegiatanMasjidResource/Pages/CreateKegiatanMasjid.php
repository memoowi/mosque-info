<?php

namespace App\Filament\Resources\KegiatanMasjidResource\Pages;

use App\Filament\Resources\KegiatanMasjidResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateKegiatanMasjid extends CreateRecord
{
    protected static string $resource = KegiatanMasjidResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Berhasil')
            ->body('Kegiatan berhasil ditambahkan');
    }
}
