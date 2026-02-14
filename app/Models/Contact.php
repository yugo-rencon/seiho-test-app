<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category',
        'name',
        'email',
        'message',
        'page_url',
        'device',
        'occurred_at',
        'privacy_agreed',
        'ip_address',
        'user_agent',
        'status',
    ];

    protected $casts = [
        'occurred_at' => 'date',
        'privacy_agreed' => 'boolean',
    ];
}

