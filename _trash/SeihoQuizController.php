<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Question;

class SeihoQuizController extends Controller
{
    public function index()
    {
        return Inertia::render('Seiho/Home');
    }

    public function search(Request $request)
    {
        $selectedQuestions = $request->input('_value');

        $questions = [];

        // "souron2022A" が存在する場合
        if (in_array("souron2022A", $selectedQuestions)) {
            $question = Question::select('subjects.subject', 'years.year', 'forms.form', 'question_number', 'answer', 'explanation')
            ->join('subjects', 'questions.subject_id', '=', 'subjects.id')
            ->join('years', 'questions.year_id', '=', 'years.id')
            ->join('forms', 'questions.form_id', '=', 'forms.id')
            ->where('questions.subject_id', 1)
            ->where('questions.year_id', 1)
            ->where('questions.form_id', 1)
            ->get();
            array_push($questions, $question);
        }
        // "souron2022B" が存在する場合
        if (in_array("souron2022B", $selectedQuestions)) {
            $question = Question::select('subjects.subject', 'years.year', 'forms.form', 'question_number', 'answer', 'explanation')
            ->join('subjects', 'questions.subject_id', '=', 'subjects.id')
            ->join('years', 'questions.year_id', '=', 'years.id')
            ->join('forms', 'questions.form_id', '=', 'forms.id')
            ->where('questions.subject_id', 1)
            ->where('questions.year_id', 1)
            ->where('questions.form_id', 2)
            ->get();
            array_push($questions, $question);
        }
        // "souron2022C" が存在する場合
        if (in_array("souron2022C", $selectedQuestions)) {
            $question = Question::select('subjects.subject', 'years.year', 'forms.form', 'question_number', 'answer', 'explanation')
            ->join('subjects', 'questions.subject_id', '=', 'subjects.id')
            ->join('years', 'questions.year_id', '=', 'years.id')
            ->join('forms', 'questions.form_id', '=', 'forms.id')
            ->where('questions.subject_id', 1)
            ->where('questions.year_id', 1)
            ->where('questions.form_id', 3)
            ->get();
            array_push($questions, $question);
        }

        return Inertia::render('Seiho/Mondai', [
            'questions' => $questions
        ]);
    }
}
