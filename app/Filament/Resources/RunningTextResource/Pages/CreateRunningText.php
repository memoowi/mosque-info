<?php

namespace App\Filament\Resources\RunningTextResource\Pages;

use App\Filament\Resources\RunningTextResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateRunningText extends CreateRecord
{
    protected static string $resource = RunningTextResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Berhasil ditambahkan')
            ->body('Running Text Berhasil ditambahkan');
    }
}
