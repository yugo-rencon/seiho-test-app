<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険商品と営業";
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
                    questionTitle="生命保険マーケティング①"
                    :contents="[
                        // rev: 2026-08-22 確認済み
                        'エージェント',
                        '不可分化',
                        '低下',
                        '固定客化',
                        '信用', // 問１〜５
                    ]"
                    :labels="[
                        'ア', //1
                        'ケ', //2
                        'ウ', //3
                        'エ', //4
                        'キ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険マーケティング②"
                    :contents="[
                        // rev: 2026-08-22 確認済み
                        'CS（Customer Satisfaction）',
                        '地域特性',
                        '名寄せ',
                        '情報系',
                        'プライバシー意識', // 問6〜10
                    ]"
                    :labels="[
                        'ケ', //6
                        'オ', //7
                        'カ', //8
                        'ウ', //9
                        'キ', //10
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
                    questionTitle="第三分野市場"
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
                    questionTitle="保険料率に関する対応"
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
                    questionTitle="販売チャネルの多様化"
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
                    questionTitle="業界共通教育制度"
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
                        // rev: 2026-09-03 確認済み
                        '生活習慣病罹患率 → 乳児死亡率', //p20
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的介護保険制度の概要"
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
                        // rev: 2026-09-03 確認済み
                        '正しい',
                        '一般財形は目的を問わない使途自由な貯蓄であり、[[一般の預貯金と同じく利子（生命保険の場合は差益）に対して20％課税]]（源泉徴収の際には復興特別所得税も加算）される。', //p95
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="通信販売とインターネット通販"
                    :contents="[
                        '', //p
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
                            questionTitle: '公的介護保険制度の運営主体',
                            content: '',
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
                            questionTitle: '代理・代行',
                            content: '',
                        }, //34
                        {
                            questionTitle: '生存保険',
                            content: '',
                        }, //35
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '医療保障保険（団体型）',
                            content: '正しい',
                        }, //36
                        {
                            questionTitle: '特別勘定特約',
                            content: '',
                        }, //37
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '窓販の弊害防止措置',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '募集人登録',
                            content: '',
                        }, //39
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '企業保険の営業',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: 'シルバー市場',
                            label: 'ウ',
                            content: '約3人に1人',
                        }, //41
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '年金改革',
                            label: 'イ',
                            content: '第3号',
                        }, //42
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '保険法',
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '外貨建保険',
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
                            questionTitle: '総合福祉団体定期保険',
                            label: 'イ',
                            content: '企業等',
                        }, //46
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '単独運用特別勘定',
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '保険仲立人',
                            label: 'エ',
                            content: '媒介',
                        }, //48
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '営業職員の給与体系',
                            label: 'エ',
                            content: '保障額',
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
            <TestNavigationButtons previous-route="eigyo2025b" next-route="eigyo2024a" />
        </section>
    </SeihoTestLayout>
</template>
