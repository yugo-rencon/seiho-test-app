<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import QuestionTemp4 from "@/Components/QuestionTemp4.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税法";
const subject = "2024年度 フォームC";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 text-gray-800 py-10">
            <!-- ページタイトル -->
            <Pagetitle :title="title" :description="subject" />

            <!-- 問題リスト -->
            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険の保険金の税務上の取扱-①"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '特別控除',
                        '1/2',
                        '20%（所属税15%、地方税5%）',
                        '保険金減額',
                        '5倍', // 問１〜５
                    ]"
                    :labels="[
                        'ク', //1
                        'ア', //2
                        'カ', //3
                        'コ', //4
                        'ウ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険の保険金の税務上の取扱-②"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '1年',
                        '2年',
                        '3/4',
                        '相続',
                        '贈与', //問６〜10
                    ]"
                    :labels="[
                        'ア', //6
                        'イ', //7
                        'オ', //8
                        'ク', //9
                        'ケ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税-①"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '所得税',
                        '生活費',
                        '結婚・子育て',
                        '配偶者控除額',
                        '110', //問11〜15
                    ]"
                    :labels="[
                        'オ', //11
                        'カ', //12
                        'ウ', //13
                        'キ', //14
                        'イ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税-②"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '20',
                        '居住用不動産',
                        '2,000',
                        '2月1日から3月15日',
                        '贈与を受けた人', //問16〜20
                    ]"
                    :labels="[
                        'イ', //16
                        'ウ', //17
                        'コ', //18
                        'キ', //19
                        'エ', //20
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        // 問21
                        {
                            // rev: 2026-11-09 確認済み
                            answer: '800万円',
                            questionTitle: '退職所得の金額',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['【退職所得】', '（収入金額 − 退職所得控除額）× 1/2 ･･･ 通常の場合', '収入金額 − 退職所得控除額 ･･･ 勤続5年以下の法人役員等の場合'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['【退職所得控除額】', '40万円 × 勤続年数（最低80万円） ･･･ 勤続年数20年以下', '800万円 ＋ 70万円 ×（勤続年数 − 20年） ･･･ 勤続年数20年超'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['勤続年数5年の法人役員', '退職金：1000万円'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['退職所得控除額 ＝ 40万円 × 5年 ＝ 200万円', '退職所得 ＝ 1,000万円 − 200万円 ＝ 800万円'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 800万円',
                                },
                            ],
                        },
                    ]"
                    :labels="[
                        'ア', //21 p32-33
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税額の計算"
                    :contents="[
                        // rev: 2026-11-02 確認済み
                        '（所属金額 - 800万円）✕ 税率 → 所得金額 ✕ 税率', //p131
                        '留保金課税の場合の同族要件は、[[１株主グループ]]による株式等の保有割合が50％超の特定同族会社の場合（資本金または出資金の額が1億円以下の会社を[[除く]]）となる。', //p134
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税通達による事業保険の取扱"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '定期部分、養老部分ともに損金 → 定期部分は損金、養老部分は資産計上', //p182
                        '正しい',
                        '給与 → 資産計上', //p182
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社と税"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '各事業年度において、配当準備金として繰り入れた金額については、[[翌期配当所要額を限度]]として損金に算入される。', //p221
                        '生命保険会社が支払う契約者配当金は[[損金]]の額に算入する取扱いであるが、[[損金]]に算入できる金額について、受取配当等の[[益金]]不算入相当額までは[[損金]]の額に算入されないとされているため、生命保険会社においては実質的に受取配当等の[[益金]]不算入適用が除外または制限されることとなる。', //p222
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '運営管理機関 → 資産管理機関または国民年金基金連合会', //p218
                        '一時払いの老齢給付金については、所得税法上の[[「退職手当等」]]とみなす。', //p219
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の申告と納税"
                    :contents="[
                        // rev: 2026-11-02 確認済み
                        '1200万円 → 2000万円', //p58
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '租税特別措置法によるもの → その他の法律によるもの。', //p9
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="固定資産税"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '毎年４月１日 → 毎年１月１日', //p157
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人の種類と課税の範囲、事業年度"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '正しい',
                        '正しい',
                        '営業年度等が1年を超える場合には、[[その営業年度等を1年ごとに区分し、それぞれの期間（最後に1年未満の期間を生じたときは、その1年未満の期間）を事業年度とする]]こととされている。', //p120
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険料控除"
                    :contents="[
                        // rev: 2026-11-09 確認済み
                        '年金の支払いは、その年金の受取人の年齢が60歳に達した日以後の日で10年以上の期間またはその受取人が生存している期間にわたって定期に行うものであることが要件とされている（一時払契約は不可）。', //p164
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '租税の種類',
                            content: '外国税 → 内国税', //p3
                        }, //31
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '源泉徴収制度',
                            content: '支払った日の属する年の翌年1月10日 → 支払った日の属する月の翌月10日', //p60
                        }, //32
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '相続税と贈与税',
                            content: '相続税と贈与税はいずれも相続税法という一つの法律の中で規定されている。', //p65
                        }, //33
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '遺産分割の方法',
                            content: '正しい',
                        }, //34
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '年金受給権の評価',
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '法人税の中間申告',
                            content: '事業年度が6カ月を超える普通法人は、事業年度開始の日以後6カ月を経過した日から2カ月以内に、税務署長に対し、[[前年度実績による中間申告（予定申告）]]または[[仮決算による中間申告]]による中間報告書を提出しなければならない。', //p140
                        }, //36
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '転換時の税務',
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '不動産取得税',
                            content: '相続による取得や法人の合併による取得など形式的な所有権の移転については[[課税されない]]。', //p159
                        }, //38
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '特定退職金共済',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-11-09 確認済み
                            questionTitle: '最低課税方式',
                            content: '14% → 7%', //p223
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '給与所得',
                            label: 'エ',
                            content: '確定申告',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '所得税の課税標準',
                            label: 'オ',
                            content: '',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '所得税の税額控除',
                            label: 'ウ',
                            content: '住宅借入金（取得）等特別控除',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '寄附金控除',
                            label: 'ア',
                            content: '2,000円',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '会社利益と所得金額の調整',
                            label: 'ア',
                            content: '申告調整',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '相続税の非課税財産',
                            label: 'イ',
                            content: '公益事業用',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '相続時精算課税制度',
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '資産評価益の益金不算入',
                            label: 'ウ',
                            content: '株式',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '営業職員報酬',
                            label: 'イ',
                            content: '事業所得',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '確定給付企業年金',
                            label: 'オ',
                            content: '',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2024b" next-route="zeihou2023a" />
        </section>
    </SeihoTestLayout>
</template>
