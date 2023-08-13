<?php

namespace App\Filament\Resources\PharmaciesResource\Pages;

use App\Filament\Resources\PharmaciesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPharmacies extends EditRecord
{
    protected static string $resource = PharmaciesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}