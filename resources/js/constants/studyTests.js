export const SOURON_STUDY_CONFIG = Object.freeze({
    questionCount: 50,
    maxScore: 100,
    scoreSections: Object.freeze([
        Object.freeze({ label: "問1〜20", start: 1, end: 20, points: 1 }),
        Object.freeze({ label: "問21〜30", start: 21, end: 30, points: 4 }),
        Object.freeze({ label: "問31〜40", start: 31, end: 40, points: 1 }),
        Object.freeze({ label: "問41〜50", start: 41, end: 50, points: 3 }),
    ]),
});
