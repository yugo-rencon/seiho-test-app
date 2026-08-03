<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserExamResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'scope',
        'subject_key',
        'score',
        'exam_date',
    ];

    protected $casts = [
        'exam_date' => 'date:Y-m-d',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
