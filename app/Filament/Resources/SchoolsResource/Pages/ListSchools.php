<?php

namespace App\Filament\Resources\SchoolsResource\Pages;

use App\Filament\Resources\SchoolsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSchools extends ListRecords
{
    protected static string $resource = SchoolsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
