const title = (value) => ({ type: 'blockTitle', value });
const text = (value) => ({ type: 'text', value });
const formulas = (...value) => ({ type: 'formulaBlock', value });
const note = (value) => ({ type: 'note', value });
const result = (value) => ({ type: 'result', value: `▶ 答え ${value}` });

const percent = (value) => `${value}％`;
const yen = (value) => `${Number(value).toLocaleString('ja-JP')}円`;

const explanationBuilders = {
    monthlyInterest: ({ principal, rate, months, answer }) => [
        title('■ 解答のポイント'),
        text('月ごとに利息を元金へ組み入れるため、月利で複利計算した元利合計から元金を差し引く。'),
        title('■ 使用する公式'),
        formulas('利息 = 元金 × (1 + 月利)<sup>月数</sup> − 元金'),
        title('■ 計算方法'),
        formulas(`= ${yen(principal)} × (1 + ${rate / 100})<sup>${months}</sup> − ${yen(principal)}`),
        result(`${answer}円（円未満四捨五入）`),
    ],
    compoundAmount: ({ principal, annualRate, periodsPerYear, years, answer }) => [
        title('■ 解答のポイント'),
        text(`年利を${periodsPerYear === 2 ? '半年' : '1期間'}あたりの利率に直し、期間中の複利回数だけ掛け合わせる。`),
        title('■ 使用する公式'),
        formulas('元利合計 = 元金 × (1 + 期間利率)<sup>複利回数</sup>'),
        title('■ 計算方法'),
        formulas(
            `期間利率 = ${percent(annualRate)} ÷ ${periodsPerYear} = ${percent(annualRate / periodsPerYear)}`,
            `複利回数 = ${years}年 × ${periodsPerYear}回 = ${years * periodsPerYear}回`,
            `元利合計 = ${yen(principal)} × (1 + ${annualRate / periodsPerYear / 100})<sup>${years * periodsPerYear}</sup>`,
        ),
        result(`${answer}円（円未満四捨五入）`),
    ],
    effectiveRate: ({ nominalRate, conversions, answer }) => [
        title('■ 解答のポイント'),
        text('名称利率を1回あたりの利率に直し、1年間の転化回数だけ複利計算して実利率を求める。'),
        title('■ 使用する公式'),
        formulas('実利率 = (1 + 名称利率 ÷ 転化回数)<sup>転化回数</sup> − 1'),
        title('■ 計算方法'),
        formulas(`= (1 + ${nominalRate / 100} ÷ ${conversions})<sup>${conversions}</sup> − 1`),
        result(`${answer}％（小数第3位四捨五入）`),
    ],
    averageYield: ({ annualRate, years, answer }) => [
        title('■ 解答のポイント'),
        text('複利運用期間全体の利回りを求め、それを運用年数で割って年平均利回りを求める。'),
        title('■ 使用する公式'),
        formulas('年平均利回り = {(1 + 年利率)<sup>年数</sup> − 1} ÷ 年数'),
        title('■ 計算方法'),
        formulas(`= {(1 + ${annualRate / 100})<sup>${years}</sup> − 1} ÷ ${years}`),
        result(`${answer}％（小数第3位四捨五入）`),
    ],
    presentValue: ({ futureValue, annualRate, years, answer }) => [
        title('■ 解答のポイント'),
        text('将来受け取る金額を、複利現価の考え方で現在の金額へ割り戻す。'),
        title('■ 使用する公式'),
        formulas('現在価値 = 将来価値 ÷ (1 + 年利率)<sup>年数</sup>'),
        title('■ 計算方法'),
        formulas(`= ${yen(futureValue)} ÷ (1 + ${annualRate / 100})<sup>${years}</sup>`),
        result(`${answer}円（円未満四捨五入）`),
    ],
    annuityDue: ({ payment, annualRate, years, answer }) => [
        title('■ 解答のポイント'),
        text('毎年始の支払いなので、初回分は割り引かず、2回目以降をそれぞれ現在価値へ割り戻して合計する。'),
        title('■ 使用する公式'),
        formulas('必要資金 = 年金額 × {1 + v + v<sup>2</sup> + … + v<sup>年数−1</sup>}', 'v = 1 ÷ (1 + 年利率)'),
        title('■ 計算方法'),
        formulas(`= ${yen(payment)} × {1 + 1÷1.${String(annualRate).replace('.', '').padEnd(3, '0')} + … + (1÷(1 + ${annualRate / 100}))<sup>${years - 1}</sup>}`),
        result(`${answer}円（円未満四捨五入）`),
    ],
    survivalRate: ({ fromAge, toAge, answer }) => [
        title('■ 解答のポイント'),
        text('生命表の生存数を使い、現在の年齢の生存数に対する到達年齢の生存数の割合を求める。'),
        title('■ 使用する公式'),
        formulas(`${fromAge}歳から${toAge}歳までの生存率 = l<sub>${toAge}</sub> ÷ l<sub>${fromAge}</sub>`),
        note('lₓは、生命表に記載されたx歳の生存数。'),
        result(`${answer}（小数第6位四捨五入）`),
    ],
    survivors: ({ fromAge, years, initial, answer }) => [
        title('■ 解答のポイント'),
        text('生命表から期間中の生存率を求め、現在の人数に掛ける。'),
        title('■ 使用する公式'),
        formulas(`生存者数 = ${initial.toLocaleString('ja-JP')}人 × (l<sub>${fromAge + years}</sub> ÷ l<sub>${fromAge}</sub>)`),
        result(`${answer}人（小数第1位四捨五入）`),
    ],
    lifeExpectancy: ({ age, answer }) => [
        title('■ 解答のポイント'),
        text('平均余命は、その年齢以後に生存する延べ年数を、その年齢の生存数で割って求める。'),
        title('■ 使用する公式'),
        formulas(`平均余命 = T<sub>${age}</sub> ÷ l<sub>${age}</sub>`),
        note('生命表のlₓ（生存数）とTₓ（定常人口の累計）を使用する。'),
        result(`${answer}年（小数第3位四捨五入）`),
    ],
    termDeathPresentValue: ({ age, benefit, answer }) => [
        title('■ 解答のポイント'),
        text('1年間の死亡者数に1人あたりの保険金を掛け、1年後の支払いを予定利率1.0％で現在価値へ割り戻す。'),
        title('■ 使用する公式'),
        formulas(`死亡保険金総額の現価 = (l<sub>${age}</sub> − l<sub>${age + 1}</sub>) × ${benefit.toLocaleString('ja-JP')}千円 × 1年の複利現価率`),
        result(`${answer}千円（千円未満四捨五入）`),
    ],
    termNetPremium: ({ age, presentValue, answer }) => [
        title('■ 解答のポイント'),
        text('死亡者全員分の保険金総額の現価を、加入時の生存数で割って1人あたりの純保険料を求める。'),
        title('■ 使用する公式'),
        formulas(`純保険料 = ${presentValue.toLocaleString('ja-JP')}千円 ÷ l<sub>${age}</sub>`),
        result(`${answer}円（10円未満四捨五入）`),
    ],
    endowmentExpense: ({ age, years, benefit, answer }) => [
        title('■ 解答のポイント'),
        text('予定事業費は新契約時だけ発生するため、加入時の生存数に1人あたりの予定新契約費を掛ける。'),
        title('■ 使用する公式'),
        formulas(`予定事業費の現価 = l<sub>${age}</sub> × (${benefit.toLocaleString('ja-JP')}千円 × 25円)`),
        note(`女子${age}歳加入・保険期間${years}年。保険料払込免除のための保険料は考慮しない。`),
        result(`${answer}（千円未満四捨五入）`),
    ],
    endowmentDeath: ({ age, years, benefit, answer }) => [
        title('■ 解答のポイント'),
        text('各保険年度の死亡者数に保険金を掛け、支払時点に応じて現在価値へ割り戻した金額を合計する。'),
        title('■ 使用する公式'),
        formulas(`死亡保険金の現価 = ${benefit.toLocaleString('ja-JP')}千円 × Σ{(l<sub>x</sub> − l<sub>x+1</sub>) × v<sup>支払年</sup>}`),
        note(`xは${age}歳から${age + years - 1}歳、vは予定利率1.0％の複利現価率。`),
        result(`${answer}（千円未満四捨五入）`),
    ],
    endowmentMaturity: ({ age, years, benefit, answer }) => [
        title('■ 解答のポイント'),
        text('満期まで生存する人数に満期保険金を掛け、満期時点から現在価値へ割り戻す。'),
        title('■ 使用する公式'),
        formulas(`満期保険金の現価 = l<sub>${age + years}</sub> × ${benefit.toLocaleString('ja-JP')}千円 × v<sup>${years}</sup>`),
        note('vは予定利率1.0％の複利現価率。'),
        result(`${answer}（千円未満四捨五入）`),
    ],
    endowmentGrossPremium: ({ age, years, answer }) => [
        title('■ 解答のポイント'),
        text('収支相等の原則により、保険料収入の現価と、死亡保険金・満期保険金・予定事業費の各現価の合計を等しくする。'),
        title('■ 使用する公式'),
        formulas('年払営業保険料 = 支出現価の合計 ÷ 保険料払込対象者の現価合計'),
        note(`女子${age}歳加入・保険期間${years}年。収入は小数第1位、支出は千円未満、答えは10円未満を四捨五入する。`),
        result(`${answer}（10円未満四捨五入）`),
    ],
};

const sharedEndowment = {
    a: { age: 40, years: 5, benefit: 1500 },
    b: { age: 45, years: 5, benefit: 3000 },
    c: { age: 47, years: 4, benefit: 2000 },
};

const configs = {
    a: {
        1: [
            { kind: 'survivalRate', fromAge: 45, toAge: 50 },
            { kind: 'survivors', fromAge: 65, years: 3, initial: 100000 },
            { kind: 'lifeExpectancy', age: 111 },
            { kind: 'termDeathPresentValue', age: 50, benefit: 5000 },
            { kind: 'termNetPremium', age: 50, presentValue: 955236 },
        ],
        6: [
            { kind: 'monthlyInterest', principal: 400000, rate: 0.15, months: 6 },
            { kind: 'compoundAmount', principal: 400000, annualRate: 1.5, periodsPerYear: 2, years: 3 },
            { kind: 'effectiveRate', nominalRate: 1.5, conversions: 4 },
            { kind: 'averageYield', annualRate: 1.2, years: 5 },
            { kind: 'annuityDue', payment: 300000, annualRate: 1.1, years: 4 },
        ],
        21: [
            { kind: 'endowmentMaturity' }, { kind: 'endowmentDeath' },
            { kind: 'endowmentExpense' }, { kind: 'endowmentGrossPremium' },
        ],
    },
    b: {
        1: [
            { kind: 'monthlyInterest', principal: 1000000, rate: 0.2, months: 6 },
            { kind: 'compoundAmount', principal: 1000000, annualRate: 1.2, periodsPerYear: 2, years: 5 },
            { kind: 'effectiveRate', nominalRate: 1.8, conversions: 5 },
            { kind: 'averageYield', annualRate: 1.3, years: 6 },
            { kind: 'presentValue', futureValue: 2000000, annualRate: 1.1, years: 3 },
        ],
        6: [
            { kind: 'survivalRate', fromAge: 45, toAge: 55 },
            { kind: 'survivors', fromAge: 60, years: 5, initial: 100000 },
            { kind: 'lifeExpectancy', age: 109 },
            { kind: 'termDeathPresentValue', age: 50, benefit: 7000 },
            { kind: 'termNetPremium', age: 50, presentValue: 1337330 },
        ],
        21: [
            { kind: 'endowmentExpense' }, { kind: 'endowmentDeath' },
            { kind: 'endowmentMaturity' }, { kind: 'endowmentGrossPremium' },
        ],
    },
    c: {
        1: [
            { kind: 'monthlyInterest', principal: 700000, rate: 0.15, months: 6 },
            { kind: 'compoundAmount', principal: 700000, annualRate: 1.2, periodsPerYear: 2, years: 3 },
            { kind: 'effectiveRate', nominalRate: 1.5, conversions: 6 },
            { kind: 'averageYield', annualRate: 1.8, years: 4 },
            { kind: 'annuityDue', payment: 600000, annualRate: 1.1, years: 3 },
        ],
        6: [
            { kind: 'survivalRate', fromAge: 60, toAge: 65 },
            { kind: 'survivors', fromAge: 45, years: 10, initial: 100000 },
            { kind: 'lifeExpectancy', age: 110 },
            { kind: 'termDeathPresentValue', age: 55, benefit: 7000 },
            { kind: 'termNetPremium', age: 55, presentValue: 1810967 },
        ],
        21: [
            { kind: 'endowmentExpense' }, { kind: 'endowmentDeath' },
            { kind: 'endowmentMaturity' }, { kind: 'endowmentGrossPremium' },
        ],
    },
};

export const applyKeiriCalculationExplanations = (form, startQuestion, contents) => {
    const sectionConfigs = configs[form]?.[startQuestion];

    if (!sectionConfigs) return contents;

    return contents.map((content, index) => {
        const config = sectionConfigs[index];
        if (!config) return content;

        const builder = explanationBuilders[config.kind];
        const endowment = config.kind.startsWith('endowment') ? sharedEndowment[form] : {};

        return {
            ...content,
            explanation: builder({ ...endowment, ...config, answer: content.answer }),
        };
    });
};
