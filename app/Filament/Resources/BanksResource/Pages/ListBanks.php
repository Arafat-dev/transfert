<?php

namespace App\Filament\Resources\BanksResource\Pages;

use App\Filament\Resources\BanksResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBanks extends ListRecords
{
    protected static string $resource = BanksResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
