<?php

namespace App\Filament\Resources\ResumeDetailResource\Pages;

use App\Filament\Resources\ResumeDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageResumeDetails extends ManageRecords
{
    protected static string $resource = ResumeDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
