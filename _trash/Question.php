<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;
use App\Models\Year;
use App\Models\Form;
use App\Models\Choice;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'year_id',
        'form_id',
        'question_number',
        'answer',
        'explanation',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function Year()
    {
        return $this->belongsTo(Year::class);
    }

    public function form()
    {
        return $this->belongsTo(Form::class);
    }

}
