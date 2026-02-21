<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public const STATUS_NEW = 'new';
    public const STATUS_IN_PROGRESS = 'in_progress';
    public const STATUS_DONE = 'done';

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
        'admin_note',
        'handled_at',
        'handled_by',
    ];

    protected $casts = [
        'occurred_at' => 'date',
        'privacy_agreed' => 'boolean',
        'handled_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function handler()
    {
        return $this->belongsTo(User::class, 'handled_by');
    }

    public static function statuses(): array
    {
        return [
            self::STATUS_NEW,
            self::STATUS_IN_PROGRESS,
            self::STATUS_DONE,
        ];
    }
}
