<?php

namespace App\Filament\Admin\Resources\ReaderResource\Pages;

use App\Filament\Admin\Resources\ReaderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReaders extends ListRecords
{
    protected static string $resource = ReaderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
