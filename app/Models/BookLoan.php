<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookLoan extends Model
{
    use HasFactory;

    protected $table = 'book_loans';

    protected $fillable = [
        'reader_id',
        'book_id',
        'issue_date',
        'return_date',
    ];

    protected $casts = [
        'issue_date' => 'date',
        'return_date' => 'date',
    ];

    public function reader()
    {
        return $this->belongsTo(Reader::class, 'reader_id');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }
}
