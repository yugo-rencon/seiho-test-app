<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnglishBook extends Model
{
    protected $fillable = [
        'title', 'slug', 'author', 'genre', 'cover_url', 'amazon_url', 'cover_path', 'difficulty', 'word_count', 'page_count',
        'status', 'started_on', 'finished_on', 'interest_rating', 'recommendation_rating', 'book_overview', 'english_difficulty_note', 'memo',
    ];

    protected $casts = [
        'difficulty' => 'decimal:1',
        'word_count' => 'integer',
        'page_count' => 'integer',
        'started_on' => 'date:Y-m-d',
        'finished_on' => 'date:Y-m-d',
        'interest_rating' => 'integer',
        'recommendation_rating' => 'integer',
    ];
}
