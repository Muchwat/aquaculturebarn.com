<?php

namespace App\Filament\Resources\WorkRecordResource\Pages;

use App\Filament\Resources\WorkRecordResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWorkRecords extends ListRecords
{
    protected static string $resource = WorkRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
