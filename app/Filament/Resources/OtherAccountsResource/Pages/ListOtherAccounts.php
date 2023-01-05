<?php

namespace App\Filament\Resources\OtherAccountsResource\Pages;

use App\Filament\Resources\OtherAccountsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOtherAccounts extends ListRecords
{
    protected static string $resource = OtherAccountsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
