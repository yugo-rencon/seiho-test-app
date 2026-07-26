<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalStudyLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'studied_on',
        'category',
        'subcategory',
        'set_count',
        'minutes',
        'hours',
        'set_label',
        'source_file',
        'source_row_number',
        'raw_payload',
    ];

    protected $casts = [
        'studied_on' => 'date:Y-m-d',
        'hours' => 'decimal:2',
        'raw_payload' => 'array',
    ];
}
