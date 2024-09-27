<?php

namespace App\Filament\Resources\InvestigatorResource\Pages;

use App\Filament\Resources\InvestigatorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInvestigator extends EditRecord
{
    protected static string $resource = InvestigatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    // Override this method to handle image upload
    protected function mutateFormDataBeforeSave(array $data): array
    {
        // If a new profile image is being uploaded, check if it's a valid file
        if (isset($data['profile_image']) && $data['profile_image'] instanceof \Illuminate\Http\UploadedFile) {
            
            // Clear the old image from the media collection
            $this->record->clearMediaCollection('profile_image');

            // Add the new image to the media collection
            $this->record->addMedia($data['profile_image']->getRealPath())
                ->toMediaCollection('profile_image');
        }
        if (isset($data['profile_pdf']) && $data['profile_pdf'] instanceof \Illuminate\Http\UploadedFile) {
            // Clear the old PDF from the media collection
            $this->record->clearMediaCollection('profile_pdf');
    
            // Add the new PDF to the media collection
            $this->record->addMedia($data['profile_pdf'])
                ->toMediaCollection('profile_pdf');
        }

        return $data;
    }
}
