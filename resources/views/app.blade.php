<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @php
            $path = request()->path();
            $normalizedPath = '/'.ltrim($path, '/');
            $siteKey = str_starts_with($path, 'daigaku') ? 'daigaku'
                : (str_starts_with($path, 'senmon') ? 'senmon'
                    : (str_starts_with($path, 'ouyou') ? 'ouyou'
                        : (str_starts_with($path, 'ippan') ? 'ippan' : 'seiho')));
            $shouldLoadAds = !auth()->check() || !auth()->user()?->hasPremiumAccess($siteKey);
            $siteAssets = [
                'seiho' => [
                    'icon48' => '/images/favicons/rencon-common-48.png?v=20260620',
                    'icon192' => '/images/favicons/rencon-common-192.png?v=20260620',
                    'theme' => '#7c3aed',
                ],
                'daigaku' => [
                    'icon48' => '/images/favicons/rencon-common-48.png?v=20260620',
                    'icon192' => '/images/favicons/rencon-common-192.png?v=20260620',
                    'theme' => '#0284c7',
                ],
                'senmon' => [
                    'icon48' => '/images/favicons/rencon-common-48.png?v=20260620',
                    'icon192' => '/images/favicons/rencon-common-192.png?v=20260620',
                    'theme' => '#16a34a',
                ],
                'ouyou' => [
                    'icon48' => '/images/favicons/rencon-common-48.png?v=20260620',
                    'icon192' => '/images/favicons/rencon-common-192.png?v=20260620',
                    'theme' => '#d97706',
                ],
                'ippan' => [
                    'icon48' => '/images/favicons/rencon-common-48.png?v=20260620',
                    'icon192' => '/images/favicons/rencon-common-192.png?v=20260620',
                    'theme' => '#d946ef',
                ],
            ];
            $currentSiteAssets = $siteAssets[$siteKey];
            $canonicalUrl = rtrim(config('app.url', url('/')), '/').($normalizedPath === '/' ? '' : $normalizedPath);
            $defaultSeo = [
                'seiho' => [
                    'title' => '生保講座過去問解説',
                    'description' => '生保講座（生命保険講座）の過去問解説サイト。全科目の年度別・フォーム別解説を掲載。',
                ],
                'daigaku' => [
                    'title' => '生命保険大学課程 過去問解説',
                    'description' => '生命保険大学課程の過去問解説。科目別・年度別・フォーム別に学習できます。',
                ],
                'senmon' => [
                    'title' => '生命保険専門課程 過去問解説',
                    'description' => '生命保険専門課程の過去問解説。年度別・フォーム別に学習できます。',
                ],
                'ouyou' => [
                    'title' => '生命保険応用課程 過去問解説',
                    'description' => '生命保険応用課程の過去問解説。年度別・フォーム別に学習できます。',
                ],
                'ippan' => [
                    'title' => '生命保険一般課程 過去問解説',
                    'description' => '生命保険一般課程の過去問解説。年度別・フォーム別に学習できます。',
                ],
            ];
            $seo = $defaultSeo[$siteKey] ?? $defaultSeo['seiho'];
        @endphp
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-6TB0WW8SWW"></script>
        @if ($shouldLoadAds)
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5875099458010785"
                crossorigin="anonymous">
            </script>
        @endif
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-6TB0WW8SWW', {
                send_page_view: false // SPAでの初期ページビューを無効化
            });
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="format-detection" content="telephone=no,email=no,address=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-color" content="{{ $currentSiteAssets['theme'] }}">
        <meta name="description" content="{{ $seo['description'] }}">
        <link rel="canonical" href="{{ $canonicalUrl }}">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="seiho-test.com">
        <meta property="og:title" content="{{ $seo['title'] }}">
        <meta property="og:description" content="{{ $seo['description'] }}">
        <meta property="og:url" content="{{ $canonicalUrl }}">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="{{ $seo['title'] }}">
        <meta name="twitter:description" content="{{ $seo['description'] }}">
        <link rel="icon" href="/favicon.ico?v=20260620">
        <link rel="shortcut icon" href="/favicon.ico?v=20260620">
        <link rel="icon" type="image/png" sizes="48x48" href="{{ $currentSiteAssets['icon48'] }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ $currentSiteAssets['icon192'] }}">
        <link rel="apple-touch-icon" sizes="192x192" href="{{ $currentSiteAssets['icon192'] }}">

        <title inertia>{{ $seo['title'] }}</title>

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead

    </head>
    <body class="font-sans antialiased bg-gray-50">
    {{-- <body class="font-poppins bg-body text-white"> --}}
        @inertia
        <div
            id="adsense-html-fallback"
            style="max-width: 960px; margin: 48px auto; padding: 32px 24px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; color: #111827;"
        >
            <header style="display: flex; align-items: center; gap: 14px; margin-bottom: 28px;">
                <img src="{{ $currentSiteAssets['icon48'] }}" alt="" width="48" height="48" style="width: 48px; height: 48px;">
                <div>
                    <p style="margin: 0 0 4px; font-size: 13px; font-weight: 700; color: #6b7280;">seiho-test.com</p>
                    <h1 style="margin: 0; font-size: 32px; line-height: 1.25; font-weight: 800;">{{ $seo['title'] }}</h1>
                </div>
            </header>
            <p style="margin: 0 0 24px; max-width: 720px; font-size: 16px; line-height: 1.8; color: #4b5563;">
                {{ $seo['description'] }}
            </p>
            <nav aria-label="主要ページ" style="display: flex; flex-wrap: wrap; gap: 12px;">
                <a href="/" style="display: inline-block; border: 1px solid #e5e7eb; border-radius: 999px; padding: 10px 16px; color: #111827; text-decoration: none; font-weight: 700;">生保講座</a>
                <a href="/daigaku" style="display: inline-block; border: 1px solid #e5e7eb; border-radius: 999px; padding: 10px 16px; color: #111827; text-decoration: none; font-weight: 700;">生命保険大学課程</a>
                <a href="/ippan" style="display: inline-block; border: 1px solid #e5e7eb; border-radius: 999px; padding: 10px 16px; color: #111827; text-decoration: none; font-weight: 700;">生命保険一般課程</a>
                <a href="/senmon" style="display: inline-block; border: 1px solid #e5e7eb; border-radius: 999px; padding: 10px 16px; color: #111827; text-decoration: none; font-weight: 700;">生命保険専門課程</a>
                <a href="/ouyou" style="display: inline-block; border: 1px solid #e5e7eb; border-radius: 999px; padding: 10px 16px; color: #111827; text-decoration: none; font-weight: 700;">生命保険応用課程</a>
            </nav>
        </div>
    </body>
</html>
