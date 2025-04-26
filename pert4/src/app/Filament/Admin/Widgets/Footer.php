<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Footer as ModelsFooter;

class Footer extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total of Page Config', ModelsFooter::count())
            ->description('Total of Page Config')
            ->color('danger')
            ->icon('heroicon-o-cog-6-tooth')
        ];
    }
}
