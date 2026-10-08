<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EnglishBookShelf extends Model
{
    protected $fillable = ['user_id', 'english_book_id', 'status', 'reading_order', 'started_on', 'finished_on', 'difficulty', 'interest_rating', 'recommendation_rating', 'book_overview', 'english_difficulty_note', 'memo'];

    protected $casts = [
        'difficulty' => 'decimal:1', 'reading_order' => 'integer', 'started_on' => 'date:Y-m-d', 'finished_on' => 'date:Y-m-d',
        'interest_rating' => 'integer', 'recommendation_rating' => 'integer',
    ];

    public function book(): BelongsTo { return $this->belongsTo(EnglishBook::class, 'english_book_id'); }
}
