<?php

namespace App\Filament\Resources\TransactionResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{

    protected function getCards(): array
    {
        return [
            Card::make('Moyen de Transaction par Ville', '192.1k')
            ->description('32 increase')
            ->descriptionIcon('heroicon-s-trending-up'),
             Card::make('Taux execution', '21%')
            ->description('7% increase')
            ->descriptionIcon('heroicon-s-trending-down'),
            Card::make('Taux de consultation', '3:12')
            ->description('3% increase')
            ->descriptionIcon('heroicon-s-trending-up')
            ->color('success'),
        ];
    }
}
