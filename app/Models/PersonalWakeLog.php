<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalWakeLog extends Model
{
    protected $fillable = [
        'woke_on',
        'woke_at',
    ];

    protected $casts = [
        'woke_on' => 'date:Y-m-d',
    ];
}
