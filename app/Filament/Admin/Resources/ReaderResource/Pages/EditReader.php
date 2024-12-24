<?php

namespace App\Filament\Admin\Resources\ReaderResource\Pages;

use App\Filament\Admin\Resources\ReaderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReader extends EditRecord
{
    protected static string $resource = ReaderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
