<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EnglishVocabularyEntry extends Model
{
    protected $fillable = ['user_id', 'english_book_id', 'word', 'meaning', 'chapter', 'note'];

    public function book(): BelongsTo
    {
        return $this->belongsTo(EnglishBook::class, 'english_book_id');
    }
}
