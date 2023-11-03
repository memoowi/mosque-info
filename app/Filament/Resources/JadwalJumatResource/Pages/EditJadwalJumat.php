<?php

namespace App\Filament\Resources\JadwalJumatResource\Pages;

use App\Filament\Resources\JadwalJumatResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditJadwalJumat extends EditRecord
{
    protected static string $resource = JadwalJumatResource::class;

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
            ->title('Berhasil Update')
            ->body('Jadwal Jumat Berhasil Diubah');
    }
}
