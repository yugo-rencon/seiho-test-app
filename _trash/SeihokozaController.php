<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreseihokozaRequest;
use App\Http\Requests\UpdateseihokozaRequest;
use Illuminate\Http\Request;
use App\Models\seihokoza;
use App\Models\Subject;
use App\Models\Year;
use App\Models\Form;
use App\Models\Question;
use Inertia\Inertia;

class SeihokozaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Seiho/Index');
    }
    public function souron()
    {
        return Inertia::render('Seiho/Portfolio');
    }

    public function vueTest1()
    {
        // return Inertia::render('Seiho/Home');
    }

    public function vueTest2()
    {
        return Inertia::render('Seiho/VueTest2');
    }
    public function vueTest3()
    {
        return Inertia::render('Seiho/Mondai');
    }

    public function searchVueTest3(Request $request)
    {
        $selectedQuestions = $request->input('_value');

        // dd($selectedQuestions);

        // "souron2022A" が存在する場合
        if (in_array("souron2022A", $selectedQuestions)) {
            $question = Question::with(['subject' => function ($query) {
                $query->where('id', 1);
            }])
            ->with(['year' => function ($query) {
                $query->where('id', 1);
            }])
            ->with(['form' => function ($query) {
                $query->where('id', 1);
            }])
            ->get();

            return Inertia::render('Seiho/Mondai', [
                'question' => $question
            ]);
        }
        //  $question = Question::with('subject', 'Year', 'form')->find(1);
    }

    public function vueTest4()
    {
        return Inertia::render('Seiho/VueTest4');
    }

    public function create()
    {
        $image1 = asset('/images/what-is-mark.png');
        $image2 = asset('/images/commentary-mark.png');
        $image3 = asset('/images/correct-mark.png');
        $image4 = asset('/images/directory-icon.png');

        return Inertia::render('Seiho/Create', [
            'image1' => $image1,
            'image2' => $image2,
            'image3' => $image3,
            'image4' => $image4,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreseihokozaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreseihokozaRequest $request)
    {
        $subject = Subject::where('subject', $request->subject)->first();
        $year = Year::where('year', $request->year)->first();
        $form = Form::where('form', $request->form)->first();

        Question::create([
            'subject_id' => $subject->id,
            'year_id' => $year->id,
            'form_id' => $form->id,
            'question_number' => $request->question_number,
            'answer' => $request->answer,
            'explanation' => $request->explanation,
        ]);

        return to_route('seihokozas.create')
        ->with([
            'message' => '登録しました。',
            'status' => 'success',
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\seihokoza  $seihokoza
     * @return \Illuminate\Http\Response
     */
    public function show(seihokoza $seihokoza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\seihokoza  $seihokoza
     * @return \Illuminate\Http\Response
     */
    public function edit(seihokoza $seihokoza)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateseihokozaRequest  $request
     * @param  \App\Models\seihokoza  $seihokoza
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateseihokozaRequest $request, seihokoza $seihokoza)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\seihokoza  $seihokoza
     * @return \Illuminate\Http\Response
     */
    public function destroy(seihokoza $seihokoza)
    {
        //
    }


}
