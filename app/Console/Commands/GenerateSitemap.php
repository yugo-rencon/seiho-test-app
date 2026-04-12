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
            '/senmon',
            '/senmon/policy',
            '/senmon/terms',
            '/senmon/contact',
            '/ouyou',
            '/ouyou/policy',
            '/ouyou/terms',
            '/ouyou/contact',
            '/ippan',
            '/ippan/policy',
            '/ippan/terms',
            '/ippan/contact',
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

        $daigakuSubjects = ['shikumi-kojin', 'fp', 'zei', 'sisan', 'kigyo', 'syakai'];
        $daigakuYears = ['2025', '2024', '2023', '2022', '2021'];
        foreach ($daigakuSubjects as $subject) {
            foreach ($daigakuYears as $year) {
                foreach ($forms as $form) {
                    $sitemap->add(Url::create("{$baseUrl}/daigaku/{$subject}{$year}{$form}"));
                }
            }
        }

        $senmonOuyouYears = ['2025', '2024', '2023', '2022', '2021', '2020'];
        $senmonOuyouPeriods = [
            'h1' => ['a', 'b'],
            'h2' => ['a', 'b', 'c', 'd'],
        ];
        foreach (['senmon', 'ouyou'] as $scope) {
            foreach ($senmonOuyouYears as $year) {
                foreach ($senmonOuyouPeriods as $period => $scopeForms) {
                    foreach ($scopeForms as $form) {
                        $sitemap->add(Url::create("{$baseUrl}/{$scope}/{$year}-{$period}-{$form}"));
                    }
                }
            }
        }

        $ippanYears = ['2025'];
        $ippanMonths = ['1-6', '7-12'];
        $ippanForms = ['a', 'b', 'c', 'd', 'e'];
        foreach ($ippanYears as $year) {
            foreach ($ippanMonths as $months) {
                foreach ($ippanForms as $form) {
                    $sitemap->add(Url::create("{$baseUrl}/ippan/{$year}-{$months}-{$form}"));
                }
            }
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ sitemap.xml generated successfully!');
    }
}
