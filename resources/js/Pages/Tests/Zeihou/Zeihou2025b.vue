<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税法";
const subject = "2025年度 フォームB";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-[#fdfbff] text-gray-800 py-10">
            <!-- ページタイトル -->
            <Pagetitle :title="title" :description="subject" />

            <!-- 問題リスト -->
            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の申告と納税"
                    :contents="[
                        // rev: 2026-08-22 確認済み
                        '遺贈',
                        '被相続人',
                        '10カ月',
                        '担保',
                        '10万円', // 問１〜５
                    ]"
                    :labels="[
                        'ア', //1
                        'ケ', //2
                        'オ', //3
                        'エ', //4
                        'コ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税の申告と納付"
                    :contents="[
                        // rev: 2026-08-22 確認済み
                        '6カ月',
                        '2カ月',
                        '損益計算書',
                        '更正',
                        '決定', // 問6〜10
                    ]"
                    :labels="[
                        'ウ', //6
                        'イ', //7
                        'ケ', //8
                        'カ', //9
                        'オ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の生命保険料控除（2012年（平成24年）1月1日以後の締結契約）①"
                    :contents="[
                        // rev: 2026-08-22 確認済み
                        '3親等',
                        '保険金受取人',
                        '5年',
                        '身体の傷害',
                        '配偶者', // 問11〜15
                    ]"
                    :labels="[
                        'ア', //11
                        'ケ', //12
                        'ウ', //13
                        'カ', //14
                        'ク', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の生命保険料控除（2012年（平成24年）1月1日以後の締結契約）②"
                    :contents="[
                        // rev: 2026-08-22 確認済み
                        '10年',
                        '一時払',
                        '60歳',
                        '退職年金',
                        '1回', // 問16〜20
                    ]"
                    :labels="[
                        'ウ', //16
                        'キ', //17
                        'カ', //18
                        'ケ', //19
                        'ア', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="租税の種類"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="営業職員報酬"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="事業税"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税通達による事業保険の取扱い"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="税率"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当所得"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続時精算課税制度"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定給付企業年金"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            questionTitle: '税の基本用語',
                            content: '',
                        }, //31
                        {
                            questionTitle: '非課税所得',
                            content: '',
                        }, //32
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '雑所得',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '医療費控除',
                            content: '正しい',
                        }, //34
                        {
                            questionTitle: '確定申告',
                            content: '',
                        }, //35
                        {
                            questionTitle: '障害者の相続税額軽減',
                            content: '',
                        }, //36
                        {
                            questionTitle: '外貨建て生命保険の取扱い',
                            content: '',
                        }, //37
                        {
                            questionTitle: '法人税の性格',
                            content: '',
                        }, //38
                        {
                            questionTitle: '財形住宅貯蓄積立保険',
                            content: '',
                        }, //39
                        {
                            questionTitle: '中途給付金',
                            content: '',
                        }, //40
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '所得税の税額控除額',
                            label: 'イ',
                            content: '二重課税',
                        }, //41
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '退職所得控除額',
                            label: 'ウ',
                            content: '40万円',
                        }, //42
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '所得税の課税標準',
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '源泉徴収制度',
                            label: 'ア',
                            content: '翌月10日',
                        }, //44
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '法人の種類と課税の範囲',
                            label: 'オ',
                            content: '',
                        }, //45
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '定期金に関する権利',
                            label: 'エ',
                            content: '解約返戻金額',
                        }, //46
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '資産の評価益の益金不算入',
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '固定資産税の課税標準',
                            label: 'ウ',
                            content: '3年',
                        }, //48
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '不動産取得税',
                            label: 'イ',
                            content: '道府県税',
                        }, //49
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '生命保険代理店の事業免許等に係る税',
                            label: 'オ',
                            content: '',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2025a" next-route="zeihou2025c" />
        </section>
    </SeihoTestLayout>
</template>
