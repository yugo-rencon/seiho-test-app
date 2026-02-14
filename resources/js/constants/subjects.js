const COMMON_YEARS = [2024, 2023, 2022, 2021];
const COMMON_FORMS = ["a", "b", "c"];

export const SUBJECT_CATALOG = [
    {
        key: "souron",
        title: "生命保険総論",
        menuTitle: "生命保険総論",
        period: "8月〜9月実施の試験",
    },
    {
        key: "keiri",
        title: "生命保険計理",
        menuTitle: "生命保険計理",
        period: "8月〜9月実施の試験",
    },
    {
        key: "kiken",
        title: "危険選択",
        menuTitle: "危険選択",
        period: "10月〜11月実施の試験",
    },
    {
        key: "yakkan",
        title: "約款と法律",
        menuTitle: "約款と法律",
        period: "10月〜11月実施の試験",
    },
    {
        key: "kaikei",
        title: "生命保険会計",
        menuTitle: "生命保険会計",
        period: "12月〜1月実施の試験",
    },
    {
        key: "eigyo",
        title: "生命保険商品と営業",
        menuTitle: "生命保険商品と営業",
        period: "12月〜1月実施の試験",
    },
    {
        key: "zeihou",
        title: "生命保険と税法",
        menuTitle: "生命保険と税法",
        period: "2月〜3月実施の試験",
    },
    {
        key: "sisan",
        title: "資産の運用",
        menuTitle: "資産運用",
        period: "2月〜3月実施の試験",
    },
];

export const INDEX_SECTIONS = SUBJECT_CATALOG.map((subject) => ({
    id: subject.key,
    title: subject.title,
    period: subject.period,
    years: [...COMMON_YEARS],
    routePrefix: subject.key,
    gridCols: "lg:grid-cols-2 md:grid-cols-2",
}));

export const MOBILE_MENU_SUBJECTS = SUBJECT_CATALOG.map((subject) => ({
    key: subject.key,
    name: subject.menuTitle,
    tests: COMMON_YEARS.reduce((acc, year) => {
        acc[`${year}年度`] = [...COMMON_FORMS];
        return acc;
    }, {}),
}));

export const EXAM_FORMS = [...COMMON_FORMS];
