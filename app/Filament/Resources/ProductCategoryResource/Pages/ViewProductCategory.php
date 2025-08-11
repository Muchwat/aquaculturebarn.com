<?php

namespace App\Filament\Resources\ProductCategoryResource\Pages;

use App\Filament\Resources\ProductCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewProductCategory extends ViewRecord
{
    protected static string $resource = ProductCategoryResource::class;

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

