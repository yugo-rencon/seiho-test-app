<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EnglishBookShelf extends Model
{
    protected $fillable = [
        'user_id', 'english_book_id', 'status', 'started_on', 'finished_on', 'rating', 'memo',
    ];

    protected $casts = [
        'started_on' => 'date:Y-m-d',
        'finished_on' => 'date:Y-m-d',
        'rating' => 'integer',
    ];

    public function book(): BelongsTo
    {
        return $this->belongsTo(EnglishBook::class, 'english_book_id');
    }
}
