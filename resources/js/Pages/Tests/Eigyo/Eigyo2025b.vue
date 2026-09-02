<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険商品と営業";
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
                    questionTitle="近年の商品対応と今後の方向性①"
                    :contents="[
                        // rev: 2026-08-22 確認済み
                        '5年ごと配当',
                        '契約者',
                        '引受基準緩和',
                        '生前給付',
                        '就業不能', // 問１〜５
                    ]"
                    :labels="[
                        'イ', //1
                        'キ', //2
                        'ケ', //3
                        'カ', //4
                        'オ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="近年の商品対応と今後の方向性②"
                    :contents="[
                        // rev: 2026-08-22 確認済み
                        '重要な事項を説明した書面',
                        '受領確認',
                        'ユニバーサル保険',
                        '銀行窓販',
                        '為替', // 問6〜10
                    ]"
                    :labels="[
                        'ア', //6
                        'オ', //7
                        'コ', //8
                        'エ', //9
                        'イ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法・金融サービス提供法①"
                    :contents="[
                        // rev: 2026-08-22 確認済み
                        '事業者',
                        '困惑',
                        '取り消す',
                        '重要事項',
                        '断定的', // 問11〜15
                    ]"
                    :labels="[
                        'ウ', //11
                        'イ', //12
                        'オ', //13
                        'エ', //14
                        'カ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法・金融サービス提供法②"
                    :contents="[
                        // rev: 2026-08-22 確認済み
                        '金融商品販売業者等',
                        '市場リスク',
                        '信用リスク',
                        '元本欠損額の賠償責任',
                        '勧誘方針', // 問16〜20
                    ]"
                    :labels="[
                        'ウ', //16
                        'カ', //17
                        'キ', //18
                        'ア', //19
                        'イ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金の給付"
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
                    questionTitle="貯蓄を主たる目的とした保険"
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
                    questionTitle="団体年金保険"
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
                    questionTitle="団体信用生命保険"
                    :contents="[
                        // rev: 2026-09-03 確認済み
                        '団体信用生命保険 → 消費者信用団体生命保険', //p87
                        '債権者である信用供与機関（銀行等）または信用保証機関を[[保険契約者および保険金受取人]]、債務者を[[被保険者]]、未返済債務額を保険金額とする商品である。', //p86
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人営業機構（直販）"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="長い老後生活を見据えたライフ・プランニング"
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
                    questionTitle="個人保険商品の特約"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="財形貯蓄制度"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="今後の顧客サービス"
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
                    questionTitle="営業職員採用・育成の意義"
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
                            // rev: 2026-09-03 確認済み
                            questionTitle: 'マイナンバー法（行政手続における特定の個人を識別するための番号の利用等に関する法律）',
                            content: '未成年者を除くすべての人 → 住民票を有するすべての人', //p41
                        }, //31
                        {
                            questionTitle: '福利厚生費',
                            content: '',
                        }, //32
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '継続教育制度',
                            content: '正しい',
                        }, //33
                        {
                            questionTitle: '保険料払込方法',
                            content: '',
                        }, //34
                        {
                            questionTitle: '確定拠出年金制度',
                            content: '',
                        }, //35
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '心身障害者扶養者生命保険',
                            content: '正しい',
                        }, //36
                        {
                            questionTitle: '特別勘定特約',
                            content: '',
                        }, //37
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '個人顧客システム',
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '営業職員の給与体系',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '支社の配置',
                            content: '',
                        }, //40
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '種類別貯蓄現在高',
                            label: 'ウ',
                            content: '定期性預貯金',
                        }, //41
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '年金改革',
                            label: 'イ',
                            content: '第3号',
                        }, //42
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '公的介護保険制度のしくみ',
                            label: 'ア',
                            content: '40歳',
                        }, //43
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '変額保険',
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '危険選択の方法',
                            label: 'イ',
                            content: '生命保険協会',
                        }, //45
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '加入後の自在性（1990年代）',
                            label: 'イ',
                            content: '移行',
                        }, //46
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '医療保障保険（団体型）',
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '通信販売',
                            label: 'エ',
                            content: '加入保険金額',
                        }, //48
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '変額保険販売資格要件',
                            label: 'ア',
                            content: '専門課程',
                        }, //49
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '代理店',
                            label: 'ア',
                            content: '募集代理店',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="eigyo2025a" next-route="eigyo2025c" />
        </section>
    </SeihoTestLayout>
</template>
