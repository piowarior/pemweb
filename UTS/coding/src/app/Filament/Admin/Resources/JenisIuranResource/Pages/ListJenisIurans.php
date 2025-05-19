<?php

namespace App\Filament\Admin\Resources\JenisIuranResource\Pages;

use App\Filament\Admin\Resources\JenisIuranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenisIurans extends ListRecords
{
    protected static string $resource = JenisIuranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
