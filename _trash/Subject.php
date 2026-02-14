<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
    ];

    public function quetions()
    {
        return $this->hasMany(Question::class);
    }
}
