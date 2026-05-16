<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @php
            $shouldLoadAds = !auth()->check() || !auth()->user()?->hasPremiumAccess();
            $path = request()->path();
            $siteKey = str_starts_with($path, 'daigaku') ? 'daigaku'
                : (str_starts_with($path, 'senmon') ? 'senmon'
                    : (str_starts_with($path, 'ouyou') ? 'ouyou'
                        : (str_starts_with($path, 'ippan') ? 'ippan' : 'seiho')));
            $siteAssets = [
                'seiho' => [
                    'icon' => '/images/rencon-favicon.svg?v=seiho',
                    'icon48' => '/images/favicons/rencon-favicon-seiho-48.png?v=20260516',
                    'icon192' => '/images/favicons/rencon-favicon-seiho-192.png?v=20260516',
                    'manifest' => '/site-seiho.webmanifest',
                    'theme' => '#7c3aed',
                ],
                'daigaku' => [
                    'icon' => '/images/rencon-favicon-daigaku.svg?v=daigaku',
                    'icon48' => '/images/favicons/rencon-favicon-daigaku-48.png?v=20260516',
                    'icon192' => '/images/favicons/rencon-favicon-daigaku-192.png?v=20260516',
                    'manifest' => '/site-daigaku.webmanifest',
                    'theme' => '#0284c7',
                ],
                'senmon' => [
                    'icon' => '/images/rencon-favicon-senmon.svg?v=senmon',
                    'icon48' => '/images/favicons/rencon-favicon-senmon-48.png?v=20260516',
                    'icon192' => '/images/favicons/rencon-favicon-senmon-192.png?v=20260516',
                    'manifest' => '/site-senmon.webmanifest',
                    'theme' => '#16a34a',
                ],
                'ouyou' => [
                    'icon' => '/images/rencon-favicon-ouyou.svg?v=ouyou',
                    'icon48' => '/images/favicons/rencon-favicon-ouyou-48.png?v=20260516',
                    'icon192' => '/images/favicons/rencon-favicon-ouyou-192.png?v=20260516',
                    'manifest' => '/site-ouyou.webmanifest',
                    'theme' => '#d97706',
                ],
                'ippan' => [
                    'icon' => '/images/rencon-favicon-ippan.svg?v=ippan',
                    'icon48' => '/images/favicons/rencon-favicon-ippan-48.png?v=20260516',
                    'icon192' => '/images/favicons/rencon-favicon-ippan-192.png?v=20260516',
                    'manifest' => '/site-ippan.webmanifest',
                    'theme' => '#d946ef',
                ],
            ];
            $currentSiteAssets = $siteAssets[$siteKey];
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
        <link rel="icon" type="image/png" sizes="48x48" href="{{ $currentSiteAssets['icon48'] }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ $currentSiteAssets['icon192'] }}">
        <link rel="icon" type="image/svg+xml" href="{{ $currentSiteAssets['icon'] }}">
        <link rel="apple-touch-icon" sizes="192x192" href="{{ $currentSiteAssets['icon192'] }}">
        <link rel="manifest" href="{{ $currentSiteAssets['manifest'] }}">

        {{-- <title inertia>{{ config('app.name', 'Laravel') }}</title> --}}
        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead

    </head>
    <body class="font-sans antialiased bg-gray-50">
    {{-- <body class="font-poppins bg-body text-white"> --}}
        @inertia
    </body>
</html>
