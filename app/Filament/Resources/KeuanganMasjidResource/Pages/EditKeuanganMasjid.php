<?php

namespace App\Filament\Resources\KeuanganMasjidResource\Pages;

use App\Filament\Resources\KeuanganMasjidResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditKeuanganMasjid extends EditRecord
{
    protected static string $resource = KeuanganMasjidResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Berhasil Diubah')
            ->body('Data Keuangan Masjid Berhasil Diubah');
    }
}
