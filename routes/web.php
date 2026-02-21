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

Route::controller(TestController::class)->group(function () {
    // 試験科目の定義
    $subjects = [
        'souron' => [2025, 2024, 2023, 2022, 2021, 2020],   // 生命保険総論
        'keiri'  => [2025, 2024, 2023, 2022, 2021],   // 生命保険計理
        'kiken'  => [2025, 2024, 2023, 2022, 2021],   // 危険選択
        'yakkan' => [2025, 2024, 2023, 2022, 2021],   // 約款と法律
        'kaikei' => [2025, 2024, 2023, 2022, 2021],   // 生命保険会計
        'eigyo'  => [2025, 2024, 2023, 2022, 2021],   // 生命保険商品と営業
        'zeihou' => [2025, 2024, 2023, 2022, 2021],   // 生命保険と税法
        'sisan'  => [2025, 2024, 2023, 2022, 2021],   // 資産運用
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
    Route::post('mypage/pass-score', [TestController::class, 'updatePassScore'])->name('mypage.passScore');
    Route::post('mypage/results', [TestController::class, 'updateExamResult'])->name('mypage.results');
    Route::get('billing/checkout', [BillingController::class, 'checkout'])->name('billing.checkout');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('contact', 'index')->name('contact.index');
    Route::post('contact', 'store')->middleware('throttle:10,1')->name('contact.store');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::post('users/{user}/toggle-premium', [AdminController::class, 'toggleUserPremium'])->name('admin.users.togglePremium');
    Route::get('contacts', [ContactAdminController::class, 'index'])->name('admin.contacts.index');
    Route::post('contacts/{contact}/status', [ContactAdminController::class, 'updateStatus'])->name('admin.contacts.updateStatus');
    Route::post('contacts/{contact}/note', [ContactAdminController::class, 'updateNote'])->name('admin.contacts.updateNote');
});

Route::post('stripe/webhook', [StripeWebhookController::class, 'handle'])->name('stripe.webhook');

require __DIR__.'/auth.php';
