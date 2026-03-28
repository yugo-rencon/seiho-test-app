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

    // 大学課程トップ
    public function daigakuIndex()
    {
        return Inertia::render('Daigaku/Index');
    }

    // 大学課程: 生命保険のしくみと個人保険商品 2025年度 フォームA
    public function daigakuShikumiKojin2025a()
    {
        return Inertia::render('Daigaku/Tests/Shikumi/Shikumi2025a');
    }
    public function daigakuShikumiKojin2025b()
    {
        return Inertia::render('Daigaku/Tests/Shikumi/Shikumi2025b');
    }
    public function daigakuShikumiKojin2025c()
    {
        return Inertia::render('Daigaku/Tests/Shikumi/Shikumi2025c');
    }
    public function daigakuShikumiKojin2024a()
    {
        return Inertia::render('Daigaku/Tests/Shikumi/Shikumi2024a');
    }
    public function daigakuShikumiKojin2024b()
    {
        return Inertia::render('Daigaku/Tests/Shikumi/Shikumi2024b');
    }
    public function daigakuShikumiKojin2024c()
    {
        return Inertia::render('Daigaku/Tests/Shikumi/Shikumi2024c');
    }
    public function daigakuShikumiKojin2023a()
    {
        return Inertia::render('Daigaku/Tests/Shikumi/Shikumi2023a');
    }
    public function daigakuShikumiKojin2023b()
    {
        return Inertia::render('Daigaku/Tests/Shikumi/Shikumi2023b');
    }
    public function daigakuShikumiKojin2023c()
    {
        return Inertia::render('Daigaku/Tests/Shikumi/Shikumi2023c');
    }
    public function daigakuFpCompliance2025a()
    {
        return Inertia::render('Daigaku/Tests/Fp/Fp2025a');
    }
    public function daigakuFpCompliance2025b()
    {
        return Inertia::render('Daigaku/Tests/Fp/Fp2025b');
    }
    public function daigakuFpCompliance2025c()
    {
        return Inertia::render('Daigaku/Tests/Fp/Fp2025c');
    }
    public function daigakuFpCompliance2024a()
    {
        return Inertia::render('Daigaku/Tests/Fp/Fp2024a');
    }
    public function daigakuFpCompliance2024b()
    {
        return Inertia::render('Daigaku/Tests/Fp/Fp2024b');
    }
    public function daigakuFpCompliance2024c()
    {
        return Inertia::render('Daigaku/Tests/Fp/Fp2024c');
    }
    public function daigakuFpCompliance2023a()
    {
        return Inertia::render('Daigaku/Tests/Fp/Fp2023a');
    }
    public function daigakuFpCompliance2023b()
    {
        return Inertia::render('Daigaku/Tests/Fp/Fp2023b');
    }
    public function daigakuFpCompliance2023c()
    {
        return Inertia::render('Daigaku/Tests/Fp/Fp2023c');
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
        $scope = $request->query('scope');
        if (!in_array($scope, ['seiho', 'daigaku'], true)) {
            $returnTo = (string) $request->query('return_to', '');
            $scope = str_starts_with($returnTo, '/daigaku') ? 'daigaku' : 'seiho';
        }

        return Inertia::render('Info/Pricing', [
            'returnTo' => $request->query('return_to'),
            'scope' => $scope,
        ]);
    }

    // 大学課程 料金
    public function daigakuPricing(Request $request)
    {
        return Inertia::render('Daigaku/Pricing', [
            'returnTo' => $request->query('return_to'),
        ]);
    }
    // マイページ
    public function mypage(Request $request){
        /** @var User $user */
        $user = auth()->user();
        $scope = $request->routeIs('daigaku.*') ? 'daigaku' : 'seiho';
        $subjects = $this->subjectsByScope($scope);

        $results = $user->examResults()
            ->where('scope', $scope)
            ->get(['subject_key', 'score'])
            ->keyBy('subject_key')
            ->map(function ($result) {
                return [
                    'score' => $result->score,
                ];
            });

        return Inertia::render('Info/MyPage', [
            'scope' => $scope,
            'passScore' => $scope === 'daigaku' ? 60 : $user->pass_score,
            'subjects' => $subjects,
            'results' => $results,
            'hasPremium' => $user->hasPremiumAccess($scope),
            'hasPremiumSeiho' => $user->hasPremiumAccess('seiho'),
            'hasPremiumDaigaku' => $user->hasPremiumAccess('daigaku'),
        ]);
    }

    public function updatePassScore(Request $request)
    {
        if ($request->routeIs('daigaku.*')) {
            return back()->with('status', '大学課程試験の合格基準は60点で固定です。');
        }

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
        $scope = $request->routeIs('daigaku.*') ? 'daigaku' : 'seiho';
        $subjectKeys = array_column($this->subjectsByScope($scope), 'key');

        $data = $request->validate([
            'subject_key' => ['required', 'string', 'in:' . implode(',', $subjectKeys)],
            'score' => ['nullable', 'integer', 'min:0', 'max:100'],
        ]);

        if (!isset($data['score'])) {
            UserExamResult::where('user_id', $request->user()->id)
                ->where('scope', $scope)
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
                'scope' => $scope,
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

    private function subjectsByScope(string $scope): array
    {
        if ($scope === 'daigaku') {
            return $this->daigakuSubjects();
        }

        return $this->seihoSubjects();
    }

    private function seihoSubjects(): array
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

    private function daigakuSubjects(): array
    {
        return [
            ['key' => 'shikumi_kojin', 'name' => '生命保険のしくみと個人保険商品'],
            ['key' => 'fp_compliance', 'name' => 'ファイナンシャルプランニングとコンプライアンス'],
            ['key' => 'tax_sozoku', 'name' => '生命保険と税・相続'],
            ['key' => 'sisan_unyou', 'name' => '資産運用知識'],
            ['key' => 'houjin_consulting', 'name' => '企業向け保険商品とコンサルティング'],
            ['key' => 'social_security', 'name' => '社会保障制度'],
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
    public function keiri2020a(){return Inertia::render('Tests/Keiri/Keiri2020a');}
    public function keiri2020b(){return Inertia::render('Tests/Keiri/Keiri2020b');}
    public function keiri2020c(){return Inertia::render('Tests/Keiri/Keiri2020c');}

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
    public function kiken2020a(){return Inertia::render('Tests/Kiken/Kiken2020a');}
    public function kiken2020b(){return Inertia::render('Tests/Kiken/Kiken2020b');}
    public function kiken2020c(){return Inertia::render('Tests/Kiken/Kiken2020c');}

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
    public function yakkan2020a(){return Inertia::render('Tests/Yakkan/Yakkan2020a');}
    public function yakkan2020b(){return Inertia::render('Tests/Yakkan/Yakkan2020b');}
    public function yakkan2020c(){return Inertia::render('Tests/Yakkan/Yakkan2020c');}

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
    public function kaikei2020a(){return Inertia::render('Tests/Kaikei/Kaikei2020a');}
    public function kaikei2020b(){return Inertia::render('Tests/Kaikei/Kaikei2020b');}
    public function kaikei2020c(){return Inertia::render('Tests/Kaikei/Kaikei2020c');}

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
    public function eigyo2020a(){return Inertia::render('Tests/Eigyo/Eigyo2020a');}
    public function eigyo2020b(){return Inertia::render('Tests/Eigyo/Eigyo2020b');}
    public function eigyo2020c(){return Inertia::render('Tests/Eigyo/Eigyo2020c');}

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
    public function zeihou2020a(){return Inertia::render('Tests/Zeihou/Zeihou2020a');}
    public function zeihou2020b(){return Inertia::render('Tests/Zeihou/Zeihou2020b');}
    public function zeihou2020c(){return Inertia::render('Tests/Zeihou/Zeihou2020c');}

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
    public function sisan2020a(){return Inertia::render('Tests/Sisan/Sisan2020a');}
    public function sisan2020b(){return Inertia::render('Tests/Sisan/Sisan2020b');}
    public function sisan2020c(){return Inertia::render('Tests/Sisan/Sisan2020c');}

}
