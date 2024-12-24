<?php

namespace App\Filament\Admin\Resources\BookLoanResource\Pages;

use App\Filament\Admin\Resources\BookLoanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBookLoan extends CreateRecord
{
    protected static string $resource = BookLoanResource::class;
}
