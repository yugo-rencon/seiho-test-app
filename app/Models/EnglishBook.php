<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnglishBook extends Model
{
    protected $fillable = [
        'title', 'author', 'cover_url', 'cover_path', 'difficulty', 'word_count', 'page_count',
    ];

    protected $casts = [
        'difficulty' => 'integer',
        'word_count' => 'integer',
        'page_count' => 'integer',
    ];
}
