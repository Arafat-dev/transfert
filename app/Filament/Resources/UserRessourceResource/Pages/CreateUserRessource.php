<?php

namespace App\Filament\Resources\UserRessourceResource\Pages;

use App\Filament\Resources\UserRessourceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUserRessource extends CreateRecord
{
    protected static string $resource = UserRessourceResource::class;
}
