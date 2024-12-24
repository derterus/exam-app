<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    use HasFactory;

    protected $table = 'readers';

    protected $fillable = [
        'full_name',
        'address',
        'phone',
    ];

    public function loans()
    {
        return $this->hasMany(BookLoan::class, 'reader_id');
    }

    public function getFullNameAttribute($value)
    {
        return ucfirst($value);
    }
}
