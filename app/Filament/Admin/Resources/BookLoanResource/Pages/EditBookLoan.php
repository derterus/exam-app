<?php

namespace App\Filament\Admin\Resources\BookLoanResource\Pages;

use App\Filament\Admin\Resources\BookLoanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBookLoan extends EditRecord
{
    protected static string $resource = BookLoanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
