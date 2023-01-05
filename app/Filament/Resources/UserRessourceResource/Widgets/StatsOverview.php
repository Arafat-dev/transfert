<?php

namespace App\Filament\Resources\USerRessourceResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{protected function getCards(): array
    {
        return [
            Card::make('Nombre total de visiteur', '34.1k')
            ->description('32 increase')
            ->descriptionIcon('heroicon-s-trending-up'),
             Card::make('Moyen de tout le user', '61%')
            ->description('7% increase')
            ->descriptionIcon('heroicon-s-trending-down'),
            Card::make('Nombre Utilisateur connecter', '8:12')
            ->description('3% increase')
            ->descriptionIcon('heroicon-s-trending-up')
            ->color('success'),
        ];
    }
}
