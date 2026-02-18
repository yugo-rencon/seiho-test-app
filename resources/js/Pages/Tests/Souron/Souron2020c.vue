<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2020年度 フォームC";
const SAME = "※2020年度フォームA/B/Cで同一問題";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 text-gray-800 py-10">
            <Pagetitle :title="title" :description="subject" />

            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '無診査', //1
                        '1年', //2
                        '損金', //3
                        '総合福祉', //4
                        'ヒューマン', //5
                    ]"
                    :labels="[
                        'ウ', //1
                        'オ', //2
                        'イ', //3
                        'ケ', //4
                        'キ', //5
                    ]"
                />

                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '減少', //6
                        '退職後', //7
                        '一時払い', //8
                        '就業不能', //9
                        '健康保険法', //10
                    ]"
                    :labels="[
                        'エ', //6
                        'カ', //7
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
                        '予定利率', //11
                        '逆ざや', //12
                        'ALM（資産負債統合管理）', //13
                        '法令等の遵守（コンプライアンス）', //14
                        '負債特性', //15
                    ]"
                    :labels="[
                        'ウ', //11
                        'オ', //12
                        'コ', //13
                        'カ', //14
                        'イ', //15
                    ]"
                />

                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    :note="SAME"
                    :contents="[
                        '法定他業', //16
                        '規制緩和', //17
                        '金融システム改革法', //18
                        '50', //19
                        'デリバティブ', //20
                    ]"
                    :labels="[
                        'コ', //16
                        'エ', //17
                        'キ', //18
                        'オ', //19
                        'ア', //20
                    ]"
                />

                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい', //21-ア
                        '変動幅を拡大 → 変動幅を縮小<br>平均変動率 → 平均経験率', //21-イ p4
                        '保険料と危険度の積 → 保険金額と危険度の積', //21-ウ p4
                    ]"
                />

                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    :note="SAME"
                    :contents="[
                        '救済してくれた → 救済はなく、自らが補塡', //22-ア p53
                        '正しい', //22-イ
                        'ギルドは保障制度ではない', //22-ウ p54
                    ]"
                />

                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '保険契約者の資格について制限はない（行為能力者である必要もない）', //23-ア p13
                        '正しい', //23-イ
                        '保険金受取人の資格について制限はない（行為能力者である必要もない）', //23-ウ p14
                    ]"
                />

                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    :note="SAME"
                    :contents="[
                        '財団法人 → 社団法人', //24-ア p160
                        '資本金 → 資金', //24-イ p160
                        '正しい', //24-ウ
                    ]"
                />

                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '一時払終身保険、一時払養老保険や保険期間10年以下の平準払養老保険の販売 → 住宅ローン関連の信用生命保険と長期火災保険等の販売', //25-ア p175
                        '住宅ローン関連の信用生命保険と長期火災保険 → 一時払終身保険、一時払養老保険や保険期間10年以下の平準払養老保険', //25-イ p175
                        '正しい', //25-ウ
                    ]"
                />

                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '取扱いはできない → 一定の範囲内で取扱いが可能', //26-ア p27
                        '正しい', //26-イ
                        '正しい', //26-ウ
                    ]"
                />

                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい', //27-ア
                        '保険料払込猶予期間と不可争期間の規定を設けることはできない → 設けることは可能', //27-イ p64
                        '正しい', //27-ウ
                    ]"
                />

                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    :note="SAME"
                    :contents="[
                        '正しい', //28-ア
                        '正しい', //28-イ
                        '社会扶助制度 → 公的扶助制度', //28-ウ p123
                    ]"
                />

                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい', //29-ア
                        '正しい', //29-イ
                        '1500万以上の資本金 → 1000万円以上の資本金', //29-ウ p176
                    ]"
                />

                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい', //30-ア
                        '他の金融機関の年金型商品との相違がなくなっている → 優れた特色がある', //30-イ p190
                        '正しい', //30-ウ
                    ]"
                />

                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40（解）
                        { label: '解', content: '正しい', note: SAME }, //31
                        { label: '解', content: '国民生命表 → 経験生命表', note: SAME }, //32 p15
                        { label: '解', content: '正しい' }, //33
                        { label: '解', content: '連邦政府 → 州政府' }, //34 p65
                        { label: '解', content: '正しい' }, //35
                        { label: '解', content: '相互会社から株式会社 → 株式会社から相互会社', note: SAME }, //36 p78
                        { label: '解', content: '国 → 各市町村' }, //37 p141
                        { label: '解', content: '責任準備金 → 供託金' }, //38 p159
                        { label: '解', content: '正しい' }, //39
                        { label: '解', content: '正しい' }, //40
                        // 問41〜50（ア〜オ）
                        { label: 'ア', content: '付合契約' }, //41
                        { label: 'ア', content: '10', note: SAME }, //42
                        { label: 'オ', content: '' }, //43
                        { label: 'オ', content: '' }, //44
                        { label: 'エ', content: '賦課式', note: SAME }, //45
                        { label: 'ウ', content: '既契約' }, //46
                        { label: 'オ', content: '' }, //47
                        { label: 'イ', content: '消費者契約法', note: SAME }, //48
                        { label: 'イ', content: '組合員' }, //49
                        { label: 'ウ', content: '保険金額' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="souron2020b" />
        </section>
    </SeihoTestLayout>
</template>
