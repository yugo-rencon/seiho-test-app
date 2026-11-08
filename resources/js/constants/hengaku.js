export const HENGAKU_YEARS = [2026, 2025, 2024, 2023];
export const HENGAKU_PERIODS = [
    { id: "h1", label: "4月〜8月実施", forms: ["a", "b"] },
    { id: "h2", label: "9月〜3月実施", forms: ["a", "b", "c", "d"] },
];

export const hengakuYearsForPeriod = (periodId) =>
    HENGAKU_YEARS.filter((year) => periodId === "h1" || year !== 2026);

export const HENGAKU_MENU_SUBJECTS = HENGAKU_PERIODS.map((period) => ({
    key: `hengaku-${period.id}`,
    name: period.label,
    tests: Object.fromEntries(
        hengakuYearsForPeriod(period.id).map((year) => [`${year}年度`, period.forms]),
    ),
}));

export const HENGAKU_TEST_ROUTES = {
    "2024-h1-a": "hengaku2024h1a",
    "2024-h1-b": "hengaku2024h1b",
    "2024-h2-a": "hengaku2024h2a",
    "2024-h2-b": "hengaku2024h2b",
    "2024-h2-c": "hengaku2024h2c",
    "2024-h2-d": "hengaku2024h2d",
    "2023-h1-a": "hengaku2023h1a",
    "2023-h1-b": "hengaku2023h1b",
    "2023-h2-a": "hengaku2023h2a",
    "2023-h2-b": "hengaku2023h2b",
    "2023-h2-c": "hengaku2023h2c",
    "2023-h2-d": "hengaku2023h2d",
    "2025-h1-a": "hengaku2025h1a",
    "2025-h1-b": "hengaku2025h1b",
    "2026-h1-a": "hengaku2026h1a",
    "2026-h1-b": "hengaku2026h1b",
    "2025-h2-a": "hengaku2025h2a",
    "2025-h2-b": "hengaku2025h2b",
    "2025-h2-c": "hengaku2025h2c",
    "2025-h2-d": "hengaku2025h2d",
};
export const hengakuTestRoute = (year, period, form) =>
    HENGAKU_TEST_ROUTES[`${year}-${period}-${String(form).toLowerCase()}`] ?? null;
