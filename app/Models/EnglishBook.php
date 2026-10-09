<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnglishBook extends Model
{
    protected $fillable = [
        'title', 'slug', 'author', 'is_japanese_author', 'genre', 'cover_url', 'amazon_url', 'rakuten_url', 'cover_path', 'word_count', 'word_count_estimated', 'page_count',
    ];

    protected $casts = [
        'is_japanese_author' => 'boolean',
        'word_count' => 'integer',
        'word_count_estimated' => 'boolean',
        'page_count' => 'integer',
    ];
}
