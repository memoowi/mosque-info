<?php

namespace App\Filament\Resources\KegiatanMasjidResource\Pages;

use App\Filament\Resources\KegiatanMasjidResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditKegiatanMasjid extends EditRecord
{
    protected static string $resource = KegiatanMasjidResource::class;

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
            ->title('Perubahan diterapkan')
            ->body('Kegiatan berhasil diperbaharui');
    }
}
