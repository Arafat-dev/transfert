<?php

namespace App\Filament\Resources\TransactionResource\Pages;

use App\Filament\Resources\TransactionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

use App\Filament\Resources\TransactionResource\Widgets\StatsOverview;

class ListTransactions extends ListRecords
{
    protected static string $resource = TransactionResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            StatsOverview::class,
        ];
    }

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
