<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyAttemptAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'study_attempt_id',
        'question_no',
        'selected_answer',
        'correct_answer',
        'is_correct',
        'points_awarded',
        'answered_at',
    ];

    protected $casts = [
        'is_correct' => 'boolean',
        'answered_at' => 'datetime',
    ];

    public function attempt()
    {
        return $this->belongsTo(StudyAttempt::class, 'study_attempt_id');
    }
}
