<?php

namespace App\Filament\Resources\UserRessourceResource\Pages;

use App\Filament\Resources\UserRessourceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditUserRessource extends EditRecord
{
    protected static string $resource = UserRessourceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    
}
