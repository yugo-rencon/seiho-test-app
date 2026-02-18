<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2023年度 フォームC";

const SAME = "※2023年度フォームA/B/Cで同一問題";
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
                    :contents="[
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
                    :contents="[
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
                    :note="SAME"
                    :contents="[
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
                    :note="SAME"
                    :contents="[
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
                    :note="SAME"
                    :contents="[
                        'デリバティブ商品 → ニューウェーブ商品', //p69
                        '正しい',
                        '金融規制改革法（ドッド・フランク法） → グラム・リーチ・ブライリー法', //p71
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
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
                    :note="SAME"
                    :contents="[
                        '正しい',
                        '正しい',
                        '被保険者 → 保険者', //p15
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
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
                    :note="SAME"
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
                        // 問31〜40
                        { label: '解', content: '片務契約でない（保険金支払債務と保険料支払債務とが対価関係になる双務契約）' }, //31
                        { label: '解', content: '正しい' }, //32
                        { label: '解', content: '正しい', note: SAME }, //33
                        { label: '解', content: '正しい' }, //34
                        { label: '解', content: '正しい' }, //35
                        { label: '解', content: '正しい' }, //36
                        { label: '解', content: '100株未満 → 1株未満', note: SAME }, //37
                        { label: '解', content: '3段階 → 2段階（JA（単位農協）、JA共済連）', note: SAME }, //38
                        { label: '解', content: '正しい' }, //39
                        { label: '解', content: '倍額 → 同額' }, //40
                        // 問41〜50
                        { label: 'エ', content: 'いずれか遅い日' }, //41
                        { label: 'ア', content: '負債', note: SAME }, //42
                        { label: 'エ', content: '維持費' }, //43
                        { label: 'オ', content: '' }, //44
                        { label: 'イ', content: '更生手続', note: SAME }, //45
                        { label: 'ア', content: '家計可処分所得', note: SAME }, //46
                        { label: 'オ', content: '' }, //47
                        { label: 'イ', content: '安全性' }, //48
                        { label: 'ウ', content: '第2号被保険者' }, //49
                        { label: 'ウ', content: '保険金額' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="souron2023b" next-route="souron2022a" />
        </section>
    </SeihoTestLayout>
</template>
