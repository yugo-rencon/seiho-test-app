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

export const KEIRI_STUDY_CONFIG = Object.freeze({
    questionCount: 50,
    maxScore: 100,
    scoreSections: Object.freeze([
        Object.freeze({ label: "問1〜20", start: 1, end: 20, points: 1 }),
        Object.freeze({ label: "問21〜30", start: 21, end: 30, points: 4 }),
        Object.freeze({ label: "問31〜40", start: 31, end: 40, points: 1 }),
        Object.freeze({ label: "問41〜50", start: 41, end: 50, points: 3 }),
    ]),
});

const makeChoices = (entries) => entries.map(([label, text]) => ({ label, text }));

export const SOURON_ASSET_CHOICES_1 = makeChoices([
    ['ア', '順ざや'], ['イ', '負債特性'], ['ウ', '予定利率'], ['エ', '資産特性'], ['オ', '逆ざや'],
    ['カ', '法令等の遵守（コンプライアンス）'], ['キ', '予定死亡率'], ['ク', '生保共同センター（LINC）'], ['ケ', '情報化'], ['コ', 'ALM（資産負債統合管理）'],
]);

export const SOURON_ASSET_CHOICES_2 = makeChoices([
    ['ア', 'デリバティブ'], ['イ', '業務の代行'], ['ウ', '税制抜本改革法'], ['エ', '規制緩和'], ['オ', '50'],
    ['カ', '60'], ['キ', '金融システム改革法'], ['ク', '投資助言'], ['ケ', '付随業務'], ['コ', '法定他業'],
]);

export const SOURON_HISTORY_CHOICES_1 = makeChoices([
    ['ア', '自給自足'], ['イ', '身分制度'], ['ウ', '計量単位'], ['エ', '社会福祉'], ['オ', '保障制度'],
    ['カ', 'ギルド'], ['キ', '相互扶助'], ['ク', '友愛組合'], ['ケ', '地産地消'], ['コ', '経済単位'],
]);

export const SOURON_HISTORY_CHOICES_2 = makeChoices([
    ['ア', '航海保険'], ['イ', '冒険貸借'], ['ウ', '公的扶助'], ['エ', '統計学'], ['オ', '社会保険'],
    ['カ', '海上保険'], ['キ', '経済学'], ['ク', '海上請負'], ['ケ', 'ドイツ'], ['コ', 'オランダ'],
]);

export const SOURON_SOCIAL_CHOICES_1 = makeChoices([
    ['ア', '遅い'], ['イ', '健康寿命'], ['ウ', '7'], ['エ', '9'], ['オ', '雇用'],
    ['カ', '扶養'], ['キ', '速い'], ['ク', '平均寿命'], ['ケ', '20〜64'], ['コ', '15〜64'],
]);

export const SOURON_SOCIAL_CHOICES_2 = makeChoices([
    ['ア', '上回って'], ['イ', '合計特殊出生率'], ['ウ', '未婚率'], ['エ', '年金'], ['オ', '下回って'],
    ['カ', '合計特定育成率'], ['キ', '失業'], ['ク', '65'], ['ケ', '70'], ['コ', '労働力率'],
]);

export const SOURON_DIVIDEND_CHOICES_1 = makeChoices([
    ['ア', '費用'], ['イ', '20％'], ['ウ', '80％'], ['エ', '非社員契約'], ['オ', '約款'],
    ['カ', '無社員契約'], ['キ', '公平性'], ['ク', '定款'], ['ケ', '公共性'], ['コ', '負債'],
]);

export const SOURON_DIVIDEND_CHOICES_2 = makeChoices([
    ['ア', '増加'], ['イ', '区分分析'], ['ウ', '償還差益'], ['エ', '小さく'], ['オ', '上回る'],
    ['カ', '減少'], ['キ', '利源分析'], ['ク', '下回る'], ['ケ', '解約益'], ['コ', '大きく'],
]);
