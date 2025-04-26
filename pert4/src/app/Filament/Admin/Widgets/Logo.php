<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Logo as ModelsLogo;


class Logo extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total of Page Config', ModelsLogo::count())
            ->description('Total of Page Config')
            ->color('danger')
            ->icon('heroicon-o-cog-6-tooth')
        ];
    }
}
