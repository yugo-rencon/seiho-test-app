<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnglishBook extends Model
{
    protected $fillable = [
        'title', 'author', 'cover_url', 'cover_path', 'status', 'difficulty', 'word_count',
        'page_count', 'started_on', 'finished_on', 'rating', 'memo',
    ];

    protected $casts = [
        'difficulty' => 'integer',
        'word_count' => 'integer',
        'page_count' => 'integer',
        'rating' => 'integer',
        'started_on' => 'date:Y-m-d',
        'finished_on' => 'date:Y-m-d',
    ];
}
