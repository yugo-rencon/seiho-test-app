<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税法";
const subject = "2025年度 フォームC";
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
                    questionTitle="グループ通算制度①"
                    :contents="[
                        // rev: 2026-08-22 確認済み
                        '経済のグローバル化',
                        '連結',
                        '分社化・持株会社化',
                        '税務情報',
                        '個別申告方式', // 問１〜５
                    ]"
                    :labels="[
                        'エ', //1
                        'コ', //2
                        'ケ', //3
                        'キ', //4
                        'オ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="グループ通算制度②"
                    :contents="[
                        // rev: 2026-08-22 確認済み
                        '完全支配関係',
                        '納税申告書',
                        'は除く',
                        '3カ月',
                        '子法人のすべて', // 問6〜10
                    ]"
                    :labels="[
                        'ア', //6
                        'キ', //7
                        'ク', //8
                        'オ', //9
                        'ウ', //10
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
                    questionTitle="所得税の配偶者控除と配偶者特別控除"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の課税財産"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税の性格"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
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
                    questionTitle="贈与税"
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
                    questionTitle="不動産取得税"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="経営者保険、退職金保険"
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
                    questionTitle="生命保険会社と税"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            questionTitle: '流通税',
                            content: '',
                        }, //31
                        {
                            questionTitle: '非課税所得',
                            content: '',
                        }, //32
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '退職所得',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '青色申告制度',
                            content: '正しい',
                        }, //34
                        {
                            questionTitle: '遺産分割の方法',
                            content: '',
                        }, //35
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '申告調整',
                            content: '正しい',
                        }, //36
                        {
                            questionTitle: '外貨建て生命保険の取扱い',
                            content: '',
                        }, //37
                        {
                            questionTitle: '固定資産税の納税義務者',
                            content: '',
                        }, //38
                        {
                            questionTitle: '財形住宅貯蓄積立保険',
                            content: '',
                        }, //39
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '確定拠出年金の拠出限度額',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '譲渡所得',
                            label: 'エ',
                            content: '全額',
                        }, //41
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '医療費控除',
                            label: 'ア',
                            content: '10万円',
                        }, //42
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '法定相続分',
                            label: 'エ',
                            content: '民法',
                        }, //43
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '相続時精算課税制度',
                            label: 'ア',
                            content: '1月1日',
                        }, //44
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '法人の種類と課税の範囲',
                            label: 'オ',
                            content: '',
                        }, //45
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '法人税法の特別規定',
                            label: 'イ',
                            content: '特定同族会社',
                        }, //46
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '個人の住民税',
                            label: 'エ',
                            content: '3,000円',
                        }, //47
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '固定資産税の課税標準',
                            label: 'ウ',
                            content: '3年',
                        }, //48
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '保険金受取時の税務',
                            label: 'オ',
                            content: '',
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
            <TestNavigationButtons previous-route="zeihou2025b" next-route="zeihou2024a" />
        </section>
    </SeihoTestLayout>
</template>
