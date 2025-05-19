<?php

namespace App\Filament\Admin\Resources\JenisIuranResource\Pages;

use App\Filament\Admin\Resources\JenisIuranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisIuran extends EditRecord
{
    protected static string $resource = JenisIuranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
