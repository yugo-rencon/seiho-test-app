<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seihokoza extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'year',
        'form',
        'question',
        'answer',
        'explanation',
    ];
}
