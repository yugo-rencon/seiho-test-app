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
Route::get('ouyou', [TestController::class, 'ouyouIndex'])->name('ouyou.index');
Route::get('ippan', [TestController::class, 'ippanIndex'])->name('ippan.index');
Route::get('ippan/2025-7-12-a', [TestController::class, 'ippan2025h2a'])->name('ippan.2025h2a');
Route::get('ippan/2025-7-12-b', [TestController::class, 'ippan2025h2b'])->name('ippan.2025h2b');
Route::get('ippan/2025-7-12-c', [TestController::class, 'ippan2025h2c'])->name('ippan.2025h2c');
Route::get('ippan/2025-7-12-d', [TestController::class, 'ippan2025h2d'])->name('ippan.2025h2d');
Route::get('ippan/2025-7-12-e', [TestController::class, 'ippan2025h2e'])->name('ippan.2025h2e');
Route::get('daigaku/pricing', [TestController::class, 'daigakuPricing'])->name('daigaku.pricing');
Route::get('daigaku/policy', [TestController::class, 'policy'])->name('daigaku.policy');
Route::get('daigaku/terms', [TestController::class, 'terms'])->name('daigaku.terms');
Route::get('daigaku/tokusho', [TestController::class, 'tokusho'])->name('daigaku.tokusho');
Route::get('daigaku/shikumi-kojin2025a', [TestController::class, 'daigakuShikumiKojin2025a'])->name('daigaku.shikumi-kojin2025a');
Route::get('daigaku/shikumi-kojin2025b', [TestController::class, 'daigakuShikumiKojin2025b'])->name('daigaku.shikumi-kojin2025b');
Route::get('daigaku/shikumi-kojin2025c', [TestController::class, 'daigakuShikumiKojin2025c'])->name('daigaku.shikumi-kojin2025c');
Route::get('daigaku/shikumi-kojin2024a', [TestController::class, 'daigakuShikumiKojin2024a'])->name('daigaku.shikumi-kojin2024a');
Route::get('daigaku/shikumi-kojin2024b', [TestController::class, 'daigakuShikumiKojin2024b'])->name('daigaku.shikumi-kojin2024b');
Route::get('daigaku/shikumi-kojin2024c', [TestController::class, 'daigakuShikumiKojin2024c'])->name('daigaku.shikumi-kojin2024c');
Route::get('daigaku/shikumi-kojin2023a', [TestController::class, 'daigakuShikumiKojin2023a'])->name('daigaku.shikumi-kojin2023a');
Route::get('daigaku/shikumi-kojin2023b', [TestController::class, 'daigakuShikumiKojin2023b'])->name('daigaku.shikumi-kojin2023b');
Route::get('daigaku/shikumi-kojin2023c', [TestController::class, 'daigakuShikumiKojin2023c'])->name('daigaku.shikumi-kojin2023c');
Route::get('daigaku/fp2025a', [TestController::class, 'daigakuFpCompliance2025a'])->name('daigaku.fp2025a');
Route::get('daigaku/fp2025b', [TestController::class, 'daigakuFpCompliance2025b'])->name('daigaku.fp2025b');
Route::get('daigaku/fp2025c', [TestController::class, 'daigakuFpCompliance2025c'])->name('daigaku.fp2025c');
Route::get('daigaku/fp2024a', [TestController::class, 'daigakuFpCompliance2024a'])->name('daigaku.fp2024a');
Route::get('daigaku/fp2024b', [TestController::class, 'daigakuFpCompliance2024b'])->name('daigaku.fp2024b');
Route::get('daigaku/fp2024c', [TestController::class, 'daigakuFpCompliance2024c'])->name('daigaku.fp2024c');
Route::get('daigaku/fp2023a', [TestController::class, 'daigakuFpCompliance2023a'])->name('daigaku.fp2023a');
Route::get('daigaku/fp2023b', [TestController::class, 'daigakuFpCompliance2023b'])->name('daigaku.fp2023b');
Route::get('daigaku/fp2023c', [TestController::class, 'daigakuFpCompliance2023c'])->name('daigaku.fp2023c');

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
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('contacts', [ContactAdminController::class, 'index'])->name('admin.contacts.index');
    Route::post('contacts/{contact}/status', [ContactAdminController::class, 'updateStatus'])->name('admin.contacts.updateStatus');
    Route::post('contacts/{contact}/note', [ContactAdminController::class, 'updateNote'])->name('admin.contacts.updateNote');
});

Route::middleware(['auth', 'admin'])->prefix('daigaku/admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('daigaku.admin.index');
    Route::get('contacts', [ContactAdminController::class, 'index'])->name('daigaku.admin.contacts.index');
    Route::post('contacts/{contact}/status', [ContactAdminController::class, 'updateStatus'])->name('daigaku.admin.contacts.updateStatus');
    Route::post('contacts/{contact}/note', [ContactAdminController::class, 'updateNote'])->name('daigaku.admin.contacts.updateNote');
});

Route::post('stripe/webhook', [StripeWebhookController::class, 'handle'])->name('stripe.webhook');

require __DIR__.'/auth.php';
