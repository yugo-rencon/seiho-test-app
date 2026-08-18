<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EnglishBook extends Model
{
    protected $fillable = [
        'title', 'slug', 'author', 'cover_url', 'amazon_url', 'cover_path', 'difficulty', 'word_count', 'page_count',
    ];

    protected $casts = [
        'difficulty' => 'integer',
        'word_count' => 'integer',
        'page_count' => 'integer',
    ];

    public function shelves(): HasMany
    {
        return $this->hasMany(EnglishBookShelf::class);
    }
}
