<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalExerciseLog extends Model
{
    protected $fillable = [
        'exercised_on',
        'activity',
        'completed',
        'memo',
    ];

    protected $casts = [
        'exercised_on' => 'date',
        'completed' => 'boolean',
    ];
}
