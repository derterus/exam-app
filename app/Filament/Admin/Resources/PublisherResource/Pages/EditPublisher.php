<?php

namespace App\Filament\Admin\Resources\PublisherResource\Pages;

use App\Filament\Admin\Resources\PublisherResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPublisher extends EditRecord
{
    protected static string $resource = PublisherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
