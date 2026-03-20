<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税法";
const subject = "2024年度 フォームA";
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
                    questionTitle="所得税法上の所得-①"
                    :contents="[
                        '公社債投資信託',
                        '法人',
                        '貸付け',
                        '通勤費',
                        '転任', // 問１〜５
                    ]"
                    :labels="[
                        'ウ', //1
                        'コ', //2
                        'ア', //3
                        'キ', //4
                        'ク', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税法上の所得-②"
                    :contents="[
                        '5',
                        '50',
                        '租税特別措置法',
                        '2分の1',
                        '40', //問６〜10
                    ]"
                    :labels="[
                        'エ', //6
                        'カ', //7
                        'コ', //8
                        'ア', //9
                        'オ', //10
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
                    questionTitle="租税の種類"
                    :contents="[
                        '正しい',
                        '財産税 → 流通税', //p4
                        '該当する → 該当しない（都市計画税、国民健康保険税等は目的税）', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="医療費控除"
                    :contents="[
                        '未払いのものも控除の対象となる → 控除の対象とならない', //p39
                        '任意の互助組織からの給付金は差し引く必要がない → 差し引いて計算する', //p40
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="遺言"
                    :contents="[
                        '特別方式 ↔︎ 普通方式', //p72
                        '正しい',
                        '遺留分も確保されない → 遺留分が確保される', //p73
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続財産の評価"
                    :contents="[
                        '保険料累計相当額 → 解約返戻金', //p111
                        '倍率方式 → 路線価方式', //p111
                        '正しい',
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
                    questionTitle="同族会社の留保金課税"
                    :contents="[
                        '正しい',
                        '1億円以下の会社に限る → 1億円以下の会社を除く', //p135
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
                    questionTitle="個人保険における保険金の取扱"
                    :contents="[
                        '正しい',
                        '10年満期 → 5年満期', //p174
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社と税"
                    :contents="[
                        '正しい',
                        '雑所得 → 事業所得', //p227
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '所得税の算出税額', content: '比例税率 → 超過累進税率' }, //31 p11
                        { questionTitle: '雑所得', content: '正しい' }, //32
                        { questionTitle: '年末調整', content: '正しい' }, //33
                        { questionTitle: '生命保険と相続対策', content: '正しい' }, //34
                        { questionTitle: '所得税額控除', content: '正しい' }, //35
                        { questionTitle: '法人税の中間申告', content: '必ず仮決算の中間報告書を提出 → 前年度実績による中間報告書でも良い' }, //36 p141
                        { questionTitle: '地方税', content: '正しい' }, //37
                        { questionTitle: '不動産取得税', content: '形式的な所有権の移転でも課税対象 → 課税されない' }, //38 p160
                        { questionTitle: '財形住宅貯蓄積立保険', content: '正しい' }, //39
                        { questionTitle: '最低課税方式', content: '14% → 7%' }, //40 p225
                        // 問41〜50
                        { questionTitle: '所得税額の計算', label: 'ウ', content: '課税所得金額' }, //41
                        { questionTitle: '所得税の課税標準', label: 'オ', content: '' }, //42
                        { questionTitle: '所得税の税額控除', label: 'ウ', content: '住宅借入金（取得）等特別控除' }, //43
                        { questionTitle: '相続税の未成年者控除・障害者控除', label: 'イ', content: '10万円' }, //44
                        { questionTitle: '会社利益と所得金額の調整', label: 'ア', content: '申告調整' }, //45
                        { questionTitle: '有価証券の評価', label: 'ア', content: '時価' }, //46
                        { questionTitle: '法人の住民税', label: 'ウ', content: '均等割' }, //47
                        { questionTitle: '弔慰金の非課税限度額', label: 'ウ', content: '半年' }, //48
                        { questionTitle: '団体定期保険の保険料', label: 'ウ', content: '生命保険料控除' }, //49
                        { questionTitle: '確定給付企業年金', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons next-route="zeihou2024b" />
        </section>
    </SeihoTestLayout>
</template>
