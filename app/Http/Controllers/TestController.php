<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserExamResult;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TestController extends Controller
{
    // ホーム
    public function index()
    {
        return Inertia::render('Index');
    }

    // このサイトについて
    public function about(){return Inertia::render('Info/About');}

    // プライバシーポリシー
    public function policy(){return Inertia::render('Info/Policy');}

    // 利用規約
    public function terms(){return Inertia::render('Info/Terms');}

    // 特商法に基づく表記
    public function tokusho(){return Inertia::render('Info/Tokusho');}

    // 更新履歴
    public function updateInfo(){return Inertia::render('Info/UpdateInfo');}

    // 勉強方法
    public function studyMethod(){return Inertia::render('Info/StudyMethod');}

    // 料金
    public function pricing(Request $request){
        return Inertia::render('Info/Pricing', [
            'returnTo' => $request->query('return_to'),
        ]);
    }
    // マイページ
    public function mypage(){
        /** @var User $user */
        $user = auth()->user();
        $subjects = $this->subjects();

        $results = $user->examResults()
            ->get(['subject_key', 'score'])
            ->keyBy('subject_key')
            ->map(function ($result) {
                return [
                    'score' => $result->score,
                ];
            });

        return Inertia::render('Info/MyPage', [
            'passScore' => $user->pass_score,
            'subjects' => $subjects,
            'results' => $results,
            'hasPremium' => $user->hasPremiumAccess(),
        ]);
    }

    public function updatePassScore(Request $request)
    {
        $data = $request->validate([
            'pass_score' => ['required', 'integer', 'min:0', 'max:100'],
        ]);

        $user = $request->user();
        $user->pass_score = $data['pass_score'];
        $user->save();

        if ($request->expectsJson()) {
            return response()->json([
                'message' => '合格基準を更新しました。',
                'pass_score' => $user->pass_score,
            ]);
        }

        return back();
    }

    public function updateExamResult(Request $request)
    {
        $subjectKeys = array_column($this->subjects(), 'key');

        $data = $request->validate([
            'subject_key' => ['required', 'string', 'in:' . implode(',', $subjectKeys)],
            'score' => ['nullable', 'integer', 'min:0', 'max:100'],
        ]);

        if (!isset($data['score'])) {
            UserExamResult::where('user_id', $request->user()->id)
                ->where('subject_key', $data['subject_key'])
                ->delete();

            if ($request->expectsJson()) {
                return response()->json([
                    'message' => '点数をクリアしました。',
                    'subject_key' => $data['subject_key'],
                    'score' => null,
                ]);
            }

            return back();
        }

        UserExamResult::updateOrCreate(
            [
                'user_id' => $request->user()->id,
                'subject_key' => $data['subject_key'],
            ],
            [
                'score' => $data['score'],
            ],
        );

        if ($request->expectsJson()) {
            return response()->json([
                'message' => '点数を更新しました。',
                'subject_key' => $data['subject_key'],
                'score' => $data['score'],
            ]);
        }

        return back();
    }

    private function subjects(): array
    {
        return [
            ['key' => 'souron', 'name' => '生命保険総論'],
            ['key' => 'keiri', 'name' => '生命保険計理'],
            ['key' => 'kiken', 'name' => '危険選択'],
            ['key' => 'yakkan', 'name' => '約款と法律'],
            ['key' => 'kaikei', 'name' => '生命保険会計'],
            ['key' => 'eigyo', 'name' => '生命保険商品と営業'],
            ['key' => 'zeihou', 'name' => '生命保険と税法'],
            ['key' => 'sisan', 'name' => '資産運用'],
        ];
    }

    // 生命保険総論
    public function souron2025a(){return Inertia::render('Tests/Souron/Souron2025a');}
    public function souron2025b(){return Inertia::render('Tests/Souron/Souron2025b');}
    public function souron2025c(){return Inertia::render('Tests/Souron/Souron2025c');}
    public function souron2024a(){return Inertia::render('Tests/Souron/Souron2024a');}
    public function souron2024b(){return Inertia::render('Tests/Souron/Souron2024b');}
    public function souron2024c(){return Inertia::render('Tests/Souron/Souron2024c');}
    public function souron2023a(){return Inertia::render('Tests/Souron/Souron2023a');}
    public function souron2023b(){return Inertia::render('Tests/Souron/Souron2023b');}
    public function souron2023c(){return Inertia::render('Tests/Souron/Souron2023c');}
    public function souron2022a(){return Inertia::render('Tests/Souron/Souron2022a');}
    public function souron2022b(){return Inertia::render('Tests/Souron/Souron2022b');}
    public function souron2022c(){return Inertia::render('Tests/Souron/Souron2022c');}
    public function souron2021a(){return Inertia::render('Tests/Souron/Souron2021a');}
    public function souron2021b(){return Inertia::render('Tests/Souron/Souron2021b');}
    public function souron2021c(){return Inertia::render('Tests/Souron/Souron2021c');}
    public function souron2020a(){return Inertia::render('Tests/Souron/Souron2020a');}
    public function souron2020b(){return Inertia::render('Tests/Souron/Souron2020b');}
    public function souron2020c(){return Inertia::render('Tests/Souron/Souron2020c');}

    // 生命保険計理
    public function keiri2025a(){return Inertia::render('Tests/Keiri/Keiri2025a');}
    public function keiri2025b(){return Inertia::render('Tests/Keiri/Keiri2025b');}
    public function keiri2025c(){return Inertia::render('Tests/Keiri/Keiri2025c');}
    public function keiri2024a(){return Inertia::render('Tests/Keiri/Keiri2024a');}
    public function keiri2024b(){return Inertia::render('Tests/Keiri/Keiri2024b');}
    public function keiri2024c(){return Inertia::render('Tests/Keiri/Keiri2024c');}
    public function keiri2023a(){return Inertia::render('Tests/Keiri/Keiri2023a');}
    public function keiri2023b(){return Inertia::render('Tests/Keiri/Keiri2023b');}
    public function keiri2023c(){return Inertia::render('Tests/Keiri/Keiri2023c');}
    public function keiri2022a(){return Inertia::render('Tests/Keiri/Keiri2022a');}
    public function keiri2022b(){return Inertia::render('Tests/Keiri/Keiri2022b');}
    public function keiri2022c(){return Inertia::render('Tests/Keiri/Keiri2022c');}
    public function keiri2021a(){return Inertia::render('Tests/Keiri/Keiri2021a');}
    public function keiri2021b(){return Inertia::render('Tests/Keiri/Keiri2021b');}
    public function keiri2021c(){return Inertia::render('Tests/Keiri/Keiri2021c');}

    // 危険選択
    public function kiken2025a(){return Inertia::render('Tests/Kiken/Kiken2025a');}
    public function kiken2025b(){return Inertia::render('Tests/Kiken/Kiken2025b');}
    public function kiken2025c(){return Inertia::render('Tests/Kiken/Kiken2025c');}
    public function kiken2024a(){return Inertia::render('Tests/Kiken/Kiken2024a');}
    public function kiken2024b(){return Inertia::render('Tests/Kiken/Kiken2024b');}
    public function kiken2024c(){return Inertia::render('Tests/Kiken/Kiken2024c');}
    public function kiken2023a(){return Inertia::render('Tests/Kiken/Kiken2023a');}
    public function kiken2023b(){return Inertia::render('Tests/Kiken/Kiken2023b');}
    public function kiken2023c(){return Inertia::render('Tests/Kiken/Kiken2023c');}
    public function kiken2022a(){return Inertia::render('Tests/Kiken/Kiken2022a');}
    public function kiken2022b(){return Inertia::render('Tests/Kiken/Kiken2022b');}
    public function kiken2022c(){return Inertia::render('Tests/Kiken/Kiken2022c');}
    public function kiken2021a(){return Inertia::render('Tests/Kiken/Kiken2021a');}
    public function kiken2021b(){return Inertia::render('Tests/Kiken/Kiken2021b');}
    public function kiken2021c(){return Inertia::render('Tests/Kiken/Kiken2021c');}

    // 約款と法律
    public function yakkan2025a(){return Inertia::render('Tests/Yakkan/Yakkan2025a');}
    public function yakkan2025b(){return Inertia::render('Tests/Yakkan/Yakkan2025b');}
    public function yakkan2025c(){return Inertia::render('Tests/Yakkan/Yakkan2025c');}
    public function yakkan2024a(){return Inertia::render('Tests/Yakkan/Yakkan2024a');}
    public function yakkan2024b(){return Inertia::render('Tests/Yakkan/Yakkan2024b');}
    public function yakkan2024c(){return Inertia::render('Tests/Yakkan/Yakkan2024c');}
    public function yakkan2023a(){return Inertia::render('Tests/Yakkan/Yakkan2023a');}
    public function yakkan2023b(){return Inertia::render('Tests/Yakkan/Yakkan2023b');}
    public function yakkan2023c(){return Inertia::render('Tests/Yakkan/Yakkan2023c');}
    public function yakkan2022a(){return Inertia::render('Tests/Yakkan/Yakkan2022a');}
    public function yakkan2022b(){return Inertia::render('Tests/Yakkan/Yakkan2022b');}
    public function yakkan2022c(){return Inertia::render('Tests/Yakkan/Yakkan2022c');}
    public function yakkan2021a(){return Inertia::render('Tests/Yakkan/Yakkan2021a');}
    public function yakkan2021b(){return Inertia::render('Tests/Yakkan/Yakkan2021b');}
    public function yakkan2021c(){return Inertia::render('Tests/Yakkan/Yakkan2021c');}

    // 生命保険会計
    public function kaikei2025a(){return Inertia::render('Tests/Kaikei/Kaikei2025a');}
    public function kaikei2025b(){return Inertia::render('Tests/Kaikei/Kaikei2025b');}
    public function kaikei2025c(){return Inertia::render('Tests/Kaikei/Kaikei2025c');}
    public function kaikei2024a(){return Inertia::render('Tests/Kaikei/Kaikei2024a');}
    public function kaikei2024b(){return Inertia::render('Tests/Kaikei/Kaikei2024b');}
    public function kaikei2024c(){return Inertia::render('Tests/Kaikei/Kaikei2024c');}
    public function kaikei2023a(){return Inertia::render('Tests/Kaikei/Kaikei2023a');}
    public function kaikei2023b(){return Inertia::render('Tests/Kaikei/Kaikei2023b');}
    public function kaikei2023c(){return Inertia::render('Tests/Kaikei/Kaikei2023c');}
    public function kaikei2022a(){return Inertia::render('Tests/Kaikei/Kaikei2022a');}
    public function kaikei2022b(){return Inertia::render('Tests/Kaikei/Kaikei2022b');}
    public function kaikei2022c(){return Inertia::render('Tests/Kaikei/Kaikei2022c');}
    public function kaikei2021a(){return Inertia::render('Tests/Kaikei/Kaikei2021a');}
    public function kaikei2021b(){return Inertia::render('Tests/Kaikei/Kaikei2021b');}
    public function kaikei2021c(){return Inertia::render('Tests/Kaikei/Kaikei2021c');}

    // 生命保険商品と営業
    public function eigyo2025a(){return Inertia::render('Tests/Eigyo/Eigyo2025a');}
    public function eigyo2025b(){return Inertia::render('Tests/Eigyo/Eigyo2025b');}
    public function eigyo2025c(){return Inertia::render('Tests/Eigyo/Eigyo2025c');}
    public function eigyo2024a(){return Inertia::render('Tests/Eigyo/Eigyo2024a');}
    public function eigyo2024b(){return Inertia::render('Tests/Eigyo/Eigyo2024b');}
    public function eigyo2024c(){return Inertia::render('Tests/Eigyo/Eigyo2024c');}
    public function eigyo2023a(){return Inertia::render('Tests/Eigyo/Eigyo2023a');}
    public function eigyo2023b(){return Inertia::render('Tests/Eigyo/Eigyo2023b');}
    public function eigyo2023c(){return Inertia::render('Tests/Eigyo/Eigyo2023c');}
    public function eigyo2022a(){return Inertia::render('Tests/Eigyo/Eigyo2022a');}
    public function eigyo2022b(){return Inertia::render('Tests/Eigyo/Eigyo2022b');}
    public function eigyo2022c(){return Inertia::render('Tests/Eigyo/Eigyo2022c');}
    public function eigyo2021a(){return Inertia::render('Tests/Eigyo/Eigyo2021a');}
    public function eigyo2021b(){return Inertia::render('Tests/Eigyo/Eigyo2021b');}
    public function eigyo2021c(){return Inertia::render('Tests/Eigyo/Eigyo2021c');}

    // 生命保険と税法
    public function zeihou2025a(){return Inertia::render('Tests/Zeihou/Zeihou2025a');}
    public function zeihou2025b(){return Inertia::render('Tests/Zeihou/Zeihou2025b');}
    public function zeihou2025c(){return Inertia::render('Tests/Zeihou/Zeihou2025c');}
    public function zeihou2024a(){return Inertia::render('Tests/Zeihou/Zeihou2024a');}
    public function zeihou2024b(){return Inertia::render('Tests/Zeihou/Zeihou2024b');}
    public function zeihou2024c(){return Inertia::render('Tests/Zeihou/Zeihou2024c');}
    public function zeihou2023a(){return Inertia::render('Tests/Zeihou/Zeihou2023a');}
    public function zeihou2023b(){return Inertia::render('Tests/Zeihou/Zeihou2023b');}
    public function zeihou2023c(){return Inertia::render('Tests/Zeihou/Zeihou2023c');}
    public function zeihou2022a(){return Inertia::render('Tests/Zeihou/Zeihou2022a');}
    public function zeihou2022b(){return Inertia::render('Tests/Zeihou/Zeihou2022b');}
    public function zeihou2022c(){return Inertia::render('Tests/Zeihou/Zeihou2022c');}
    public function zeihou2021a(){return Inertia::render('Tests/Zeihou/Zeihou2021a');}
    public function zeihou2021b(){return Inertia::render('Tests/Zeihou/Zeihou2021b');}
    public function zeihou2021c(){return Inertia::render('Tests/Zeihou/Zeihou2021c');}

    // 資産の運用
    public function sisan2025a(){return Inertia::render('Tests/Sisan/Sisan2025a');}
    public function sisan2025b(){return Inertia::render('Tests/Sisan/Sisan2025b');}
    public function sisan2025c(){return Inertia::render('Tests/Sisan/Sisan2025c');}
    public function sisan2024a(){return Inertia::render('Tests/Sisan/Sisan2024a');}
    public function sisan2024b(){return Inertia::render('Tests/Sisan/Sisan2024b');}
    public function sisan2024c(){return Inertia::render('Tests/Sisan/Sisan2024c');}
    public function sisan2023a(){return Inertia::render('Tests/Sisan/Sisan2023a');}
    public function sisan2023b(){return Inertia::render('Tests/Sisan/Sisan2023b');}
    public function sisan2023c(){return Inertia::render('Tests/Sisan/Sisan2023c');}
    public function sisan2022a(){return Inertia::render('Tests/Sisan/Sisan2022a');}
    public function sisan2022b(){return Inertia::render('Tests/Sisan/Sisan2022b');}
    public function sisan2022c(){return Inertia::render('Tests/Sisan/Sisan2022c');}
    public function sisan2021a(){return Inertia::render('Tests/Sisan/Sisan2021a');}
    public function sisan2021b(){return Inertia::render('Tests/Sisan/Sisan2021b');}
    public function sisan2021c(){return Inertia::render('Tests/Sisan/Sisan2021c');}

}
