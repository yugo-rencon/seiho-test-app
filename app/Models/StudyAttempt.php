<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyAttempt extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'exam_key',
        'attempt_no',
        'status',
        'current_question_no',
        'answered_count',
        'score',
        'max_score',
        'previous_incorrect_questions',
        'previous_correct_questions',
        'started_at',
        'completed_at',
    ];

    protected $casts = [
        'started_at' => 'datetime',
        'completed_at' => 'datetime',
        'previous_incorrect_questions' => 'array',
        'previous_correct_questions' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function answers()
    {
        return $this->hasMany(StudyAttemptAnswer::class);
    }
}
