<?php

$subjects = [
    'souron' => '生命保険総論',
    'keiri' => '生命保険計理',
    'kiken' => '危険選択',
    'yakkan' => '約款と法律',
    'kaikei' => '生命保険会計',
    'eigyo' => '生命保険商品と営業',
    'zeihou' => '生命保険と税法',
    'sisan' => '資産運用',
];

$studyEnabledExams = [
    'souron-2026-a',
    'souron-2026-b',
    'souron-2026-c',
    'souron-2025-a',
    'souron-2025-b',
    'souron-2025-c',
    'souron-2024-a',
    'souron-2024-b',
    'souron-2024-c',
    'souron-2023-a',
    'souron-2023-b',
    'souron-2023-c',
    'souron-2022-a',
    'souron-2022-b',
    'souron-2022-c',
    'souron-2021-a',
    'souron-2021-b',
    'souron-2021-c',
    'souron-2020-a',
    'souron-2020-b',
    'souron-2020-c',
    'keiri-2026-a',
    'keiri-2026-b',
    'keiri-2026-c',
    'keiri-2025-a',
];

$exams = [];
foreach (['a', 'b', 'c'] as $form) {
    $examKey = "souron-2026-{$form}";
    $exams[$examKey] = [
        'scope' => 'seiho',
        'subject_key' => 'souron',
        'subject_label' => $subjects['souron'],
        'year' => 2026,
        'form' => strtoupper($form),
        'route' => "souron2026{$form}",
        'question_count' => 50,
        'study_enabled' => in_array($examKey, $studyEnabledExams, true),
    ];
}

foreach (['a', 'b', 'c'] as $form) {
    $examKey = "keiri-2026-{$form}";
    $exams[$examKey] = [
        'scope' => 'seiho',
        'subject_key' => 'keiri',
        'subject_label' => $subjects['keiri'],
        'year' => 2026,
        'form' => strtoupper($form),
        'route' => "keiri2026{$form}",
        'question_count' => 50,
        'study_enabled' => in_array($examKey, $studyEnabledExams, true),
    ];
}

foreach ($subjects as $subjectKey => $subjectLabel) {
    foreach (range(2025, 2020) as $year) {
        foreach (['a', 'b', 'c'] as $form) {
            $examKey = "{$subjectKey}-{$year}-{$form}";
            $exams[$examKey] = [
                'scope' => 'seiho',
                'subject_key' => $subjectKey,
                'subject_label' => $subjectLabel,
                'year' => $year,
                'form' => strtoupper($form),
                'route' => "{$subjectKey}{$year}{$form}",
                'question_count' => 50,
                'study_enabled' => in_array($examKey, $studyEnabledExams, true),
            ];
        }
    }
}

return $exams;
