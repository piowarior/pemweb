<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Seo as ModelsSeo;

class Seo extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total of Seo', ModelsSeo::count())
            ->description('Total of Seo')
            ->color('danger')
            ->icon('heroicon-o-magnifying-glass')
        ];
    }
}
