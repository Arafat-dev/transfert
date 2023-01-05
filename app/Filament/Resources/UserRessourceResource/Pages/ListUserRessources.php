<?php

namespace App\Filament\Resources\UserRessourceResource\Pages;

use App\Filament\Resources\UserRessourceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

use App\Filament\Resources\UserRessourceResource\Widgets\StatsOverview;

class ListUserRessources extends ListRecords
{
    protected static string $resource = UserRessourceResource::class;

  protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return [
            StatsOverview::class,
        ];
    }


}
