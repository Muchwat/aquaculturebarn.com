<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewProduct extends ViewRecord
{
    protected static string $resource = ProductResource::class;

    /**
     * Defines the header actions available on the view page.
     * These actions appear at the top right of the page.
     */
    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(), // Allows editing the current record from the view page
        ];
    }
}