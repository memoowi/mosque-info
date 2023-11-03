<?php

namespace App\Filament\Resources\JadwalJumatResource\Pages;

use App\Filament\Resources\JadwalJumatResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateJadwalJumat extends CreateRecord
{
    protected static string $resource = JadwalJumatResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Sukses')
            ->body('Jadwal Jumat Berhasil Ditambahkan');
    }
}

