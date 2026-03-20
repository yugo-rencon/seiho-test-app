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
                        '（所属金額 - 800万円）✕ 税率 → 所得金額 ✕ 税率',
                        '3株主グループ → 1株主グループ<br>1億円以下の会社を含む → 1億円以下の会社を除く', //p135
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税通達による事業保険の取扱"
                    :contents="[
                        '定期部分、養老部分ともに損金 → 定期部分は損金、養老部分は資産計上', //p183
                        '正しい',
                        '給与 → 資産計上', //p183
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社と税"
                    :contents="[
                        '正しい',
                        '翌期配当所要領の8割を限度 → 翌期配当所要領を限度', //p223
                        '契約者配当金は益金算入 → 損金算入', //p224 ※教科書記載なし
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金"
                    :contents="[
                        '正しい',
                        '運営管理機関 → 資産管理機関または国民年金基金連合会', //p220
                        'どちらも雑所得 → 年金払いは雑所得、一時払いは退職手当等', //p221
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の申告と納税"
                    :contents="[
                        '1200万円 → 2000万円', //p56
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
                        '租税特別措置法によるもの → その他の法律によるもの。', //p8-9
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
                        '正しい',
                        '毎年4月1日 → 毎年1月1日', //p158
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人の種類と課税の範囲、事業年度"
                    :contents="[
                        '正しい',
                        '正しい',
                        '事業年度も1年を超える → 1年ごとに区分（超えない）', //p120-121
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険料控除"
                    :contents="[
                        '一時払契約であること → 一時払契約は不可', //p165
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '租税の種類', content: '外国税 → 内国税' }, //31 p3
                        { questionTitle: '源泉徴収制度', content: '支払った日の属する年の翌年1月10日 → 支払った日の属する月の翌月10日' }, //32 p59
                        { questionTitle: '相続税と贈与税', content: '相続税は相続税法、贈与税は贈与税法により規定 → いずれも相続税法により規定 ' }, //33 p64
                        { questionTitle: '遺産分割の方法', content: '正しい' }, //34
                        { questionTitle: '年金受給権の評価', content: '正しい' }, //35
                        { questionTitle: '法人税の中間申告', content: '必ず仮決算の中間報告書を提出 → 前年度実績による中間報告書でも良い' }, //36 p141
                        { questionTitle: '転換時の税務', content: '正しい' }, //37
                        { questionTitle: '不動産取得税', content: '形式的な所有権の移転でも課税対象 → 課税されない' }, //38 p160
                        { questionTitle: '特定退職金共済', content: '正しい' }, //39
                        { questionTitle: '最低課税方式', content: '14% → 7%' }, //40 p225
                        // 問41〜50
                        { questionTitle: '給与所得', label: 'エ', content: '確定申告' }, //41
                        { questionTitle: '所得税の課税標準', label: 'オ', content: '' }, //42
                        { questionTitle: '所得税の税額控除', label: 'ウ', content: '住宅借入金（取得）等特別控除' }, //43
                        { questionTitle: '寄附金控除', label: 'ア', content: '2,000円' }, //44
                        { questionTitle: '会社利益と所得金額の調整', label: 'ア', content: '申告調整' }, //45
                        { questionTitle: '相続税の非課税財産', label: 'イ', content: '公益事業用' }, //46
                        { questionTitle: '相続時精算課税制度', label: 'オ', content: '' }, //47
                        { questionTitle: '資産評価益の益金不算入', label: 'ウ', content: '株式' }, //48
                        { questionTitle: '営業職員報酬', label: 'イ', content: '事業所得' }, //49
                        { questionTitle: '確定給付企業年金', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2024b" next-route="zeihou2023a" />
        </section>
    </SeihoTestLayout>
</template>
