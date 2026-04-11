<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContactAdminController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StripeWebhookController;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return redirect('tests');
});

Route::get('tests', [TestController::class, 'index'])->name('tests.index');
Route::get('daigaku', [TestController::class, 'daigakuIndex'])->name('daigaku.index');
Route::get('senmon', [TestController::class, 'senmonIndex'])->name('senmon.index');
Route::get('senmon/{year}-{period}-{form}', [TestController::class, 'senmonTest'])
    ->where([
        'year' => '202[3-5]',
        'period' => 'h[12]',
        'form' => '[a-dA-D]',
    ])
    ->name('senmon.test');
Route::get('ouyou', [TestController::class, 'ouyouIndex'])->name('ouyou.index');
Route::get('ouyou/{year}-{period}-{form}', [TestController::class, 'ouyouTest'])
    ->where([
        'year' => '202[3-5]',
        'period' => 'h[12]',
        'form' => '[a-dA-D]',
    ])
    ->name('ouyou.test');
Route::get('ippan', [TestController::class, 'ippanIndex'])->name('ippan.index');
Route::get('ippan/{year}-{months}-{form}', [TestController::class, 'ippanTest'])
    ->where([
        'year' => '202[0-5]',
        'months' => '(1-6|7-12)',
        'form' => '[a-eA-E]',
    ])
    ->name('ippan.test');
Route::get('daigaku/pricing', [TestController::class, 'daigakuPricing'])->name('daigaku.pricing');
Route::get('daigaku/policy', [TestController::class, 'policy'])->name('daigaku.policy');
Route::get('daigaku/terms', [TestController::class, 'terms'])->name('daigaku.terms');
Route::get('daigaku/tokusho', [TestController::class, 'tokusho'])->name('daigaku.tokusho');
Route::get('senmon/policy', [TestController::class, 'policy'])->name('senmon.policy');
Route::get('senmon/terms', [TestController::class, 'terms'])->name('senmon.terms');
Route::get('ouyou/policy', [TestController::class, 'policy'])->name('ouyou.policy');
Route::get('ouyou/terms', [TestController::class, 'terms'])->name('ouyou.terms');
Route::get('ippan/policy', [TestController::class, 'policy'])->name('ippan.policy');
Route::get('ippan/terms', [TestController::class, 'terms'])->name('ippan.terms');
Route::get('daigaku/shikumi-kojin2025a', [TestController::class, 'daigakuShikumiKojin2025a'])->name('daigaku.shikumi-kojin2025a');
Route::get('daigaku/shikumi-kojin2025b', [TestController::class, 'daigakuShikumiKojin2025b'])->name('daigaku.shikumi-kojin2025b');
Route::get('daigaku/shikumi-kojin2025c', [TestController::class, 'daigakuShikumiKojin2025c'])->name('daigaku.shikumi-kojin2025c');
Route::get('daigaku/shikumi-kojin2024a', [TestController::class, 'daigakuShikumiKojin2024a'])->name('daigaku.shikumi-kojin2024a');
Route::get('daigaku/shikumi-kojin2024b', [TestController::class, 'daigakuShikumiKojin2024b'])->name('daigaku.shikumi-kojin2024b');
Route::get('daigaku/shikumi-kojin2024c', [TestController::class, 'daigakuShikumiKojin2024c'])->name('daigaku.shikumi-kojin2024c');
Route::get('daigaku/shikumi-kojin2023a', [TestController::class, 'daigakuShikumiKojin2023a'])->name('daigaku.shikumi-kojin2023a');
Route::get('daigaku/shikumi-kojin2023b', [TestController::class, 'daigakuShikumiKojin2023b'])->name('daigaku.shikumi-kojin2023b');
Route::get('daigaku/shikumi-kojin2023c', [TestController::class, 'daigakuShikumiKojin2023c'])->name('daigaku.shikumi-kojin2023c');
Route::get('daigaku/shikumi-kojin2022a', [TestController::class, 'daigakuShikumiKojin2022a'])->name('daigaku.shikumi-kojin2022a');
Route::get('daigaku/shikumi-kojin2022b', [TestController::class, 'daigakuShikumiKojin2022b'])->name('daigaku.shikumi-kojin2022b');
Route::get('daigaku/shikumi-kojin2022c', [TestController::class, 'daigakuShikumiKojin2022c'])->name('daigaku.shikumi-kojin2022c');
Route::get('daigaku/shikumi-kojin2021a', [TestController::class, 'daigakuShikumiKojin2021a'])->name('daigaku.shikumi-kojin2021a');
Route::get('daigaku/shikumi-kojin2021b', [TestController::class, 'daigakuShikumiKojin2021b'])->name('daigaku.shikumi-kojin2021b');
Route::get('daigaku/shikumi-kojin2021c', [TestController::class, 'daigakuShikumiKojin2021c'])->name('daigaku.shikumi-kojin2021c');
Route::get('daigaku/fp2025a', [TestController::class, 'daigakuFpCompliance2025a'])->name('daigaku.fp2025a');
Route::get('daigaku/fp2025b', [TestController::class, 'daigakuFpCompliance2025b'])->name('daigaku.fp2025b');
Route::get('daigaku/fp2025c', [TestController::class, 'daigakuFpCompliance2025c'])->name('daigaku.fp2025c');
Route::get('daigaku/fp2024a', [TestController::class, 'daigakuFpCompliance2024a'])->name('daigaku.fp2024a');
Route::get('daigaku/fp2024b', [TestController::class, 'daigakuFpCompliance2024b'])->name('daigaku.fp2024b');
Route::get('daigaku/fp2024c', [TestController::class, 'daigakuFpCompliance2024c'])->name('daigaku.fp2024c');
Route::get('daigaku/fp2023a', [TestController::class, 'daigakuFpCompliance2023a'])->name('daigaku.fp2023a');
Route::get('daigaku/fp2023b', [TestController::class, 'daigakuFpCompliance2023b'])->name('daigaku.fp2023b');
Route::get('daigaku/fp2023c', [TestController::class, 'daigakuFpCompliance2023c'])->name('daigaku.fp2023c');
Route::get('daigaku/zei2025a', [TestController::class, 'daigakuZei2025a'])->name('daigaku.zei2025a');
Route::get('daigaku/zei2025b', [TestController::class, 'daigakuZei2025b'])->name('daigaku.zei2025b');
Route::get('daigaku/zei2025c', [TestController::class, 'daigakuZei2025c'])->name('daigaku.zei2025c');
Route::get('daigaku/zei2024a', [TestController::class, 'daigakuZei2024a'])->name('daigaku.zei2024a');
Route::get('daigaku/zei2024b', [TestController::class, 'daigakuZei2024b'])->name('daigaku.zei2024b');
Route::get('daigaku/zei2024c', [TestController::class, 'daigakuZei2024c'])->name('daigaku.zei2024c');
Route::get('daigaku/zei2023a', [TestController::class, 'daigakuZei2023a'])->name('daigaku.zei2023a');
Route::get('daigaku/zei2023b', [TestController::class, 'daigakuZei2023b'])->name('daigaku.zei2023b');
Route::get('daigaku/zei2023c', [TestController::class, 'daigakuZei2023c'])->name('daigaku.zei2023c');
Route::get('daigaku/sisan2025a', [TestController::class, 'daigakuSisan2025a'])->name('daigaku.sisan2025a');
Route::get('daigaku/sisan2025b', [TestController::class, 'daigakuSisan2025b'])->name('daigaku.sisan2025b');
Route::get('daigaku/sisan2025c', [TestController::class, 'daigakuSisan2025c'])->name('daigaku.sisan2025c');
Route::get('daigaku/sisan2024a', [TestController::class, 'daigakuSisan2024a'])->name('daigaku.sisan2024a');
Route::get('daigaku/sisan2024b', [TestController::class, 'daigakuSisan2024b'])->name('daigaku.sisan2024b');
Route::get('daigaku/sisan2024c', [TestController::class, 'daigakuSisan2024c'])->name('daigaku.sisan2024c');
Route::get('daigaku/sisan2023a', [TestController::class, 'daigakuSisan2023a'])->name('daigaku.sisan2023a');
Route::get('daigaku/sisan2023b', [TestController::class, 'daigakuSisan2023b'])->name('daigaku.sisan2023b');
Route::get('daigaku/sisan2023c', [TestController::class, 'daigakuSisan2023c'])->name('daigaku.sisan2023c');
Route::get('daigaku/kigyo2025a', [TestController::class, 'daigakuKigyo2025a'])->name('daigaku.kigyo2025a');
Route::get('daigaku/kigyo2025b', [TestController::class, 'daigakuKigyo2025b'])->name('daigaku.kigyo2025b');
Route::get('daigaku/kigyo2025c', [TestController::class, 'daigakuKigyo2025c'])->name('daigaku.kigyo2025c');
Route::get('daigaku/kigyo2024a', [TestController::class, 'daigakuKigyo2024a'])->name('daigaku.kigyo2024a');
Route::get('daigaku/kigyo2024b', [TestController::class, 'daigakuKigyo2024b'])->name('daigaku.kigyo2024b');
Route::get('daigaku/kigyo2024c', [TestController::class, 'daigakuKigyo2024c'])->name('daigaku.kigyo2024c');
Route::get('daigaku/kigyo2023a', [TestController::class, 'daigakuKigyo2023a'])->name('daigaku.kigyo2023a');
Route::get('daigaku/kigyo2023b', [TestController::class, 'daigakuKigyo2023b'])->name('daigaku.kigyo2023b');
Route::get('daigaku/kigyo2023c', [TestController::class, 'daigakuKigyo2023c'])->name('daigaku.kigyo2023c');
Route::get('daigaku/syakai2025a', [TestController::class, 'daigakuSyakai2025a'])->name('daigaku.syakai2025a');
Route::get('daigaku/syakai2025b', [TestController::class, 'daigakuSyakai2025b'])->name('daigaku.syakai2025b');
Route::get('daigaku/syakai2025c', [TestController::class, 'daigakuSyakai2025c'])->name('daigaku.syakai2025c');
Route::get('daigaku/syakai2024a', [TestController::class, 'daigakuSyakai2024a'])->name('daigaku.syakai2024a');
Route::get('daigaku/syakai2024b', [TestController::class, 'daigakuSyakai2024b'])->name('daigaku.syakai2024b');
Route::get('daigaku/syakai2024c', [TestController::class, 'daigakuSyakai2024c'])->name('daigaku.syakai2024c');
Route::get('daigaku/syakai2023a', [TestController::class, 'daigakuSyakai2023a'])->name('daigaku.syakai2023a');
Route::get('daigaku/syakai2023b', [TestController::class, 'daigakuSyakai2023b'])->name('daigaku.syakai2023b');
Route::get('daigaku/syakai2023c', [TestController::class, 'daigakuSyakai2023c'])->name('daigaku.syakai2023c');
Route::get('daigaku/fp2022a', [TestController::class, 'daigakuFpCompliance2022a'])->name('daigaku.fp2022a');
Route::get('daigaku/fp2022b', [TestController::class, 'daigakuFpCompliance2022b'])->name('daigaku.fp2022b');
Route::get('daigaku/fp2022c', [TestController::class, 'daigakuFpCompliance2022c'])->name('daigaku.fp2022c');
Route::get('daigaku/fp2021a', [TestController::class, 'daigakuFpCompliance2021a'])->name('daigaku.fp2021a');
Route::get('daigaku/fp2021b', [TestController::class, 'daigakuFpCompliance2021b'])->name('daigaku.fp2021b');
Route::get('daigaku/fp2021c', [TestController::class, 'daigakuFpCompliance2021c'])->name('daigaku.fp2021c');
Route::get('daigaku/zei2022a', [TestController::class, 'daigakuZei2022a'])->name('daigaku.zei2022a');
Route::get('daigaku/zei2022b', [TestController::class, 'daigakuZei2022b'])->name('daigaku.zei2022b');
Route::get('daigaku/zei2022c', [TestController::class, 'daigakuZei2022c'])->name('daigaku.zei2022c');
Route::get('daigaku/zei2021a', [TestController::class, 'daigakuZei2021a'])->name('daigaku.zei2021a');
Route::get('daigaku/zei2021b', [TestController::class, 'daigakuZei2021b'])->name('daigaku.zei2021b');
Route::get('daigaku/zei2021c', [TestController::class, 'daigakuZei2021c'])->name('daigaku.zei2021c');
Route::get('daigaku/sisan2022a', [TestController::class, 'daigakuSisan2022a'])->name('daigaku.sisan2022a');
Route::get('daigaku/sisan2022b', [TestController::class, 'daigakuSisan2022b'])->name('daigaku.sisan2022b');
Route::get('daigaku/sisan2022c', [TestController::class, 'daigakuSisan2022c'])->name('daigaku.sisan2022c');
Route::get('daigaku/sisan2021a', [TestController::class, 'daigakuSisan2021a'])->name('daigaku.sisan2021a');
Route::get('daigaku/sisan2021b', [TestController::class, 'daigakuSisan2021b'])->name('daigaku.sisan2021b');
Route::get('daigaku/sisan2021c', [TestController::class, 'daigakuSisan2021c'])->name('daigaku.sisan2021c');
Route::get('daigaku/kigyo2022a', [TestController::class, 'daigakuKigyo2022a'])->name('daigaku.kigyo2022a');
Route::get('daigaku/kigyo2022b', [TestController::class, 'daigakuKigyo2022b'])->name('daigaku.kigyo2022b');
Route::get('daigaku/kigyo2022c', [TestController::class, 'daigakuKigyo2022c'])->name('daigaku.kigyo2022c');
Route::get('daigaku/kigyo2021a', [TestController::class, 'daigakuKigyo2021a'])->name('daigaku.kigyo2021a');
Route::get('daigaku/kigyo2021b', [TestController::class, 'daigakuKigyo2021b'])->name('daigaku.kigyo2021b');
Route::get('daigaku/kigyo2021c', [TestController::class, 'daigakuKigyo2021c'])->name('daigaku.kigyo2021c');
Route::get('daigaku/syakai2022a', [TestController::class, 'daigakuSyakai2022a'])->name('daigaku.syakai2022a');
Route::get('daigaku/syakai2022b', [TestController::class, 'daigakuSyakai2022b'])->name('daigaku.syakai2022b');
Route::get('daigaku/syakai2022c', [TestController::class, 'daigakuSyakai2022c'])->name('daigaku.syakai2022c');
Route::get('daigaku/syakai2021a', [TestController::class, 'daigakuSyakai2021a'])->name('daigaku.syakai2021a');
Route::get('daigaku/syakai2021b', [TestController::class, 'daigakuSyakai2021b'])->name('daigaku.syakai2021b');
Route::get('daigaku/syakai2021c', [TestController::class, 'daigakuSyakai2021c'])->name('daigaku.syakai2021c');

Route::controller(TestController::class)->group(function () {
    // 試験科目の定義
    $subjects = [
        'souron' => [2025, 2024, 2023, 2022, 2021, 2020],   // 生命保険総論
        'keiri'  => [2025, 2024, 2023, 2022, 2021, 2020],   // 生命保険計理
        'kiken'  => [2025, 2024, 2023, 2022, 2021, 2020],   // 危険選択
        'yakkan' => [2025, 2024, 2023, 2022, 2021, 2020],   // 約款と法律
        'kaikei' => [2025, 2024, 2023, 2022, 2021, 2020],   // 生命保険会計
        'eigyo'  => [2025, 2024, 2023, 2022, 2021, 2020],   // 生命保険商品と営業
        'zeihou' => [2025, 2024, 2023, 2022, 2021, 2020],   // 生命保険と税法
        'sisan'  => [2025, 2024, 2023, 2022, 2021, 2020],   // 資産運用
    ];

    $forms = ['a', 'b', 'c'];

    // 動的にルートを生成
    foreach ($subjects as $subject => $years) {
        foreach ($years as $year) {
            foreach ($forms as $form) {
                $routeName = "{$subject}{$year}{$form}";
                Route::get($routeName, $routeName)->name($routeName);
            }
        }
    }

    // 個別ページ
    Route::get('about', 'about')->name('about');
    Route::get('pricing', 'pricing')->name('pricing');
    Route::get('policy', 'policy')->name('policy');
    Route::get('terms', 'terms')->name('terms');
    Route::get('tokusho', 'tokusho')->name('tokusho');
    Route::get('updateInfo', 'updateInfo')->name('updateInfo');
    Route::get('study-method', 'studyMethod')->name('study-method');
});

Route::middleware('auth')->group(function () {
    Route::get('mypage', [TestController::class, 'mypage'])->name('mypage');
    Route::get('daigaku/mypage', [TestController::class, 'mypage'])->name('daigaku.mypage');
    Route::post('mypage/pass-score', [TestController::class, 'updatePassScore'])->name('mypage.passScore');
    Route::post('daigaku/mypage/pass-score', [TestController::class, 'updatePassScore'])->name('daigaku.mypage.passScore');
    Route::post('mypage/results', [TestController::class, 'updateExamResult'])->name('mypage.results');
    Route::post('daigaku/mypage/results', [TestController::class, 'updateExamResult'])->name('daigaku.mypage.results');
    Route::get('billing/checkout', [BillingController::class, 'checkout'])->name('billing.checkout');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('contact', 'index')->name('contact.index');
    Route::post('contact', 'store')->middleware('throttle:10,1')->name('contact.store');
    Route::get('daigaku/contact', 'index')->name('daigaku.contact.index');
    Route::post('daigaku/contact', 'store')->middleware('throttle:10,1')->name('daigaku.contact.store');
    Route::get('senmon/contact', 'index')->name('senmon.contact.index');
    Route::post('senmon/contact', 'store')->middleware('throttle:10,1')->name('senmon.contact.store');
    Route::get('ouyou/contact', 'index')->name('ouyou.contact.index');
    Route::post('ouyou/contact', 'store')->middleware('throttle:10,1')->name('ouyou.contact.store');
    Route::get('ippan/contact', 'index')->name('ippan.contact.index');
    Route::post('ippan/contact', 'store')->middleware('throttle:10,1')->name('ippan.contact.store');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('contacts', [ContactAdminController::class, 'index'])->name('admin.contacts.index');
    Route::post('contacts/{contact}/status', [ContactAdminController::class, 'updateStatus'])->name('admin.contacts.updateStatus');
    Route::post('contacts/{contact}/note', [ContactAdminController::class, 'updateNote'])->name('admin.contacts.updateNote');
    Route::post('releases/bulk', [AdminController::class, 'bulkUpdateReleases'])->name('admin.releases.bulkUpdate');
});

Route::middleware(['auth', 'admin'])->prefix('daigaku/admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('daigaku.admin.index');
    Route::get('contacts', [ContactAdminController::class, 'index'])->name('daigaku.admin.contacts.index');
    Route::post('contacts/{contact}/status', [ContactAdminController::class, 'updateStatus'])->name('daigaku.admin.contacts.updateStatus');
    Route::post('contacts/{contact}/note', [ContactAdminController::class, 'updateNote'])->name('daigaku.admin.contacts.updateNote');
});

Route::post('stripe/webhook', [StripeWebhookController::class, 'handle'])->name('stripe.webhook');

require __DIR__.'/auth.php';
