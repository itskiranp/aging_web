<?php

namespace App\Filament\Resources\HomePageContentResource\Pages;

use App\Filament\Resources\HomePageContentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomePageContent extends EditRecord
{
    protected static string $resource = HomePageContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
