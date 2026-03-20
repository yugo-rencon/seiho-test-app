<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税法";
const subject = "2024年度 フォームB";
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
                    questionTitle="住民税-①"
                    :contents="[
                        '均等割額のみ',
                        '4%',
                        '3,000円',
                        '寡婦またはひとり親',
                        '43万円', // 問１〜５
                    ]"
                    :labels="[
                        'イ', //1
                        'カ', //2
                        'キ', //3
                        'ア', //4
                        'コ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="住民税-②"
                    :contents="[
                        '普通徴収',
                        '市町村',
                        '5月',
                        '均等割額のみ',
                        '従業者数', //問６〜10
                    ]"
                    :labels="[
                        'キ', //6
                        'イ', //7
                        'コ', //8
                        'ア', //9
                        'ウ', //10
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
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税法における各種所得"
                    :contents="[
                        '利子所得 → 配当所得', //p15
                        '不動産所得 ↔︎ 事業所得', //p18
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税額の計算"
                    :contents="[
                        '正しい',
                        '4 → 5',
                        '事業用 → 居住用', //p55
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の課税財産"
                    :contents="[
                        '正しい',
                        '公益事業用財産は非課税財産に該当', //p76,81
                        '全額が課税財産 → 被相続人負担分のみ課税財産', //p76
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税法における別段の定め"
                    :contents="[
                        '時価評価 → 取得原価主義<br>評価益は益金の額に算入 → 評価益は益金の額に算入しない', //p127
                        '正しい',
                        '全額を損金に算入 → 一定の限度を定め、超える部分は損金に算入しない', //p127
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
                    questionTitle="相続"
                    :contents="[
                        '相続税は相続税法、贈与税は贈与税法により規定 → いずれも相続税法により規定', //p64
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
                    questionTitle="相続時精算課税制度"
                    :contents="[
                        '正しい',
                        '正しい',
                        '翌年以降に暦年課税へ変更できる → 変更できない', //p104
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="経営者保険を払済保険へ変更した場合の税務上の取扱"
                    :contents="[
                        '責任準備金相当額 → 解約返戻金相当額', //p200
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
                        { questionTitle: '担税者', content: '担税者は業者、納税義務者は消費者 → 担税者は消費者、納税義務者は業者' }, //31 p4
                        { questionTitle: '特定支出控除', content: '正しい' }, //32
                        { questionTitle: '特定扶養親族', content: '16歳以上23歳未満で控除額は83万円 → 19歳以上23歳未満で控除額は63万円' }, //33 p49
                        { questionTitle: '相続人', content: '正しい' }, //34
                        { questionTitle: '家屋の評価方法', content: '正しい' }, //35
                        { questionTitle: '法人税の中間申告', content: '必ず仮決算の中間報告書を提出 → 前年度実績による中間報告書でも良い' }, //36 p141
                        { questionTitle: '障害給付金等', content: '正しい' }, //37
                        { questionTitle: '不動産取得税', content: '形式的な所有権の移転でも課税対象 → 課税されない' }, //38 p160
                        { questionTitle: '総合福祉団体定期保険の保険料', content: '正しい' }, //39
                        { questionTitle: '最低課税方式', content: '14% → 7%' }, //40 p225
                        // 問41〜50
                        { questionTitle: '所得税の税額控除額', label: 'ウ', content: '租税特別措置法' }, //41
                        { questionTitle: '所得税の課税標準', label: 'オ', content: '' }, //42
                        { questionTitle: '雑所得', label: 'エ', content: '必要経費' }, //43
                        { questionTitle: '遺留分', label: 'ウ', content: '3分の1' }, //44
                        { questionTitle: '会社利益と所得金額の調整', label: 'ア', content: '申告調整' }, //45
                        { questionTitle: '相続税の申告', label: 'エ', content: '10ヶ月' }, //46
                        { questionTitle: '法人の種類と課税の範囲', label: 'イ', content: '公共法人' }, //47
                        { questionTitle: '同族会社', label: 'オ', content: '' }, //48
                        { questionTitle: '個人の事業税', label: 'ア', content: '第3種事業' }, //49
                        { questionTitle: '確定給付企業年金', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2024a" next-route="zeihou2024c" />
        </section>
    </SeihoTestLayout>
</template>
