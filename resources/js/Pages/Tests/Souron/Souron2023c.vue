<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2023年度 フォームC";
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
                    questionTitle="保険募集と監督法-①"
                    :relatedProblems="['2023c1']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '内閣総理大臣',
                        '委託',
                        '禁止行為',
                        '販売チャネル',
                        '保険ブローカー（保険仲立人）', // 問１〜５
                    ]"
                    :labels="[
                        'キ', //1
                        'エ', //2
                        'コ', //3
                        'ア', //4
                        'ウ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険募集と監督法-②"
                    :relatedProblems="['2023c6']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '意向把握義務',
                        '勧誘方針',
                        '消費者契約法',
                        '金融商品取引法',
                        '特定保険契約', //問６〜10
                    ]"
                    :labels="[
                        'ケ', //6
                        'ア', //7
                        'ク', //8
                        'ウ', //9
                        'コ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険の歴史的発展-①"
                    :relatedProblems="['2023a11', '2023b11', '2023c11']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '保障制度',
                        '自給自足',
                        '経済単位',
                        '相互扶助',
                        'ギルド', //問11〜15
                    ]"
                    :labels="[
                        'オ', //11
                        'ア', //12
                        'コ', //13
                        'キ', //14
                        'カ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険の歴史的発展-②"
                    :relatedProblems="['2023a16', '2023b16', '2023c16']"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '海上保険',
                        '冒険貸借',
                        '統計学',
                        'ドイツ',
                        '社会保険', //問16〜20
                    ]"
                    :labels="[
                        'カ', //16
                        'イ', //17
                        'エ', //18
                        'ケ', //19
                        'オ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険の対象となる危険の種類"
                    :relatedProblems="['2023c21']"
                    :contents="[
                        '正しい',
                        '変動幅を拡大 → 縮小<br>平均変動率 → 平均経験率', //p4
                        '保険料と危険度の積 → 保険金額と危険度の積', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約者配当"
                    :relatedProblems="['2023c22']"
                    :contents="[
                        '80% → 20%', //p27
                        '正しい',
                        '保険料を投資することによる利潤 → 保険料の精算<br>株主配当と同じ → 株主配当と性格が異なる', //p29
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="アメリカにおける金融革命の進展と生命保険事業"
                    :relatedProblems="['2023a23', '2023b23', '2023c23']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        'デリバティブ商品 → ニューウェーブ商品', //p69
                        '正しい',
                        '金融規制改革法（ドッド・フランク法） → グラム・リーチ・ブライリー法', //p71
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度"
                    :relatedProblems="['2023c24']"
                    :contents="[
                        '18歳以上65歳未満 → 20歳以上60歳未満', //p127
                        '付加年金 → 確定拠出年金（企業型）', //p127
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="銀行による保険販売"
                    :relatedProblems="['2023b49', '2023c25']"
                    :contents="[
                        '一時払終身保険、一時払養老保険や保険期間10年以下の平準払養老保険等 → 住宅ローン関連の信用生命保険と長期火災保険等', //p175
                        '住宅ローン関連の信用生命保険と長期火災保険等 → 一時払終身保険、一時払養老保険や期間10年以下の平準払養老保険等', //p175
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約の要素"
                    :relatedProblems="['2023a26', '2023b26', '2023c26']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '正しい',
                        '正しい',
                        '保険契約の一方の当事者である保険契約者は、[[保険者]]が危険を負担していることに対して、保険事故発生の可能性に応じたものとして保険料を支払う。', //p15
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="アメリカにおけるアームストロング調査"
                    :relatedProblems="['2023c27']"
                    :contents="[
                        '正しい',
                        '保険料払込猶予期間と不可争期間の規定を設けることはできない → 設けることは可能', //p64
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保険の特質"
                    :relatedProblems="['2023a28', '2023b28', '2023c28']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '収支相当の原則 → 大数の法則', //p126
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済と保険"
                    :relatedProblems="['2023c29']"
                    :contents="[
                        '正しい',
                        '適合性の原則 → 給付・反対給付均等の原則', //p164
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生保業界におけるシステム動向"
                    :relatedProblems="['2023c30']"
                    :contents="[
                        '資産運用分野 → 個人保険分野', //p197-198
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
                            questionTitle: '生命保険契約の法的性質',
                            relatedProblems: ['2023a21', '2023c31'],
                            content: '片務契約でない（保険金支払債務と保険料支払債務とが対価関係になる双務契約）',
                        }, //31
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '危険選択の意義',
                            relatedProblems: ['2023c32'],
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: 'イギリスにおける科学的な生命保険会社',
                            relatedProblems: ['2023a33', '2023b33', '2023c33'],
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '死亡保険',
                            relatedProblems: ['2023c34'],
                            content: '正しい',
                        }, //34
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '資産運用の自由化',
                            relatedProblems: ['2023c35'],
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '実体的監督主義',
                            relatedProblems: ['2023c36'],
                            content: '正しい',
                        }, //36
                        {
                            questionTitle: '組織変更',
                            relatedProblems: ['2023a37', '2023b37', '2023c37'],
                            content: '100株未満 → 1株未満',
                        }, //37 p162
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: 'JA共済事業',
                            relatedProblems: ['2023a38', '2023b38', '2023c38'],
                            content: 'JA共済事業は、農協系統組織の一環であり、農業協同組合の行う信用・購入・販売など、他の事業と同様、[[JA（単位農協）、JA共済連という２段階]]による組織機構により運営されている。', //p167
                        }, //38
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '消費者ニーズの変化',
                            relatedProblems: ['2023c39'],
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '医療保障商品',
                            relatedProblems: ['2023c40'],
                            content: '倍額 → 同額',
                        }, //40
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '保険の始期',
                            relatedProblems: ['2023c41'],
                            label: 'エ',
                            content: 'いずれか遅い日',
                        }, //41
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '責任準備金',
                            relatedProblems: ['2023a42', '2023b42', '2023c42'],
                            label: 'ア',
                            content: '負債',
                        }, //42
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '事業費',
                            relatedProblems: ['2023c43'],
                            label: 'エ',
                            content: '維持費',
                        }, //43
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '団体年金保険',
                            relatedProblems: ['2023c44'],
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '保険業法の一部改正',
                            relatedProblems: ['2023a45', '2023b45', '2023c45'],
                            label: 'イ',
                            content: '更生手続',
                        }, //45
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '国民経済における生命保険',
                            relatedProblems: ['2023a46', '2023b46', '2023c46'],
                            label: 'ア',
                            content: '家計可処分所得',
                        }, //46
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '保険の有用性',
                            relatedProblems: ['2023c47'],
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '生保資産運用の基本原則',
                            relatedProblems: ['2023c48'],
                            label: 'イ',
                            content: '安全性',
                        }, //48
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '公的介護保険制度の概要',
                            relatedProblems: ['2023b22', '2023c49'],
                            label: 'ウ',
                            content: '第2号被保険者',
                        }, //49
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '損害保険',
                            relatedProblems: ['2023a30', '2023c50'],
                            label: 'ウ',
                            content: '保険金額',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="souron2023b" next-route="souron2022a" />
        </section>
    </SeihoTestLayout>
</template>
