<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate sitemap.xml';

    public function handle()
    {
        $baseUrl = 'https://seiho-test.com';

        $sitemap = Sitemap::create();

        $staticPaths = [
            '/',
            '/tests',
            '/about',
            '/pricing',
            '/policy',
            '/terms',
            '/tokusho',
            '/study-method',
            '/updateInfo',
            '/contact',
            '/daigaku',
            '/daigaku/pricing',
            '/daigaku/policy',
            '/daigaku/terms',
            '/daigaku/tokusho',
            '/daigaku/contact',
        ];

        foreach ($staticPaths as $path) {
            $sitemap->add(Url::create("{$baseUrl}{$path}"));
        }

        $subjects = [
            'souron' => ['2025', '2024', '2023', '2022', '2021', '2020'],
            'keiri'  => ['2025', '2024', '2023', '2022', '2021', '2020'],
            'kiken'  => ['2025', '2024', '2023', '2022', '2021', '2020'],
            'yakkan' => ['2025', '2024', '2023', '2022', '2021', '2020'],
            'kaikei' => ['2025', '2024', '2023', '2022', '2021', '2020'],
            'eigyo'  => ['2025', '2024', '2023', '2022', '2021', '2020'],
            'zeihou' => ['2025', '2024', '2023', '2022', '2021', '2020'],
            'sisan'  => ['2025', '2024', '2023', '2022', '2021', '2020'],
        ];

        $forms = ['a', 'b', 'c'];

        foreach ($subjects as $subject => $years) {
            foreach ($years as $year) {
                foreach ($forms as $form) {
                    $url = "{$baseUrl}/{$subject}{$year}{$form}";
                    $sitemap->add(Url::create($url));
                }
            }
        }

        $daigakuYears = ['2025', '2024', '2023'];
        foreach ($daigakuYears as $year) {
            foreach ($forms as $form) {
                $sitemap->add(Url::create("{$baseUrl}/daigaku/shikumi-kojin{$year}{$form}"));
            }
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ sitemap.xml generated successfully!');
    }
}
