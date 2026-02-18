<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2022年度 フォームC";

const SAME = "※2022年度フォームA/B/Cで同一問題";
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
                        '保険料の拠出',
                        '全国健康保険協会管掌保険',
                        '国家公務員',
                        '国民健康保険',
                        '後期高齢者', // 問１〜５
                    ]"
                    :labels="[
                        'イ', //1
                        'オ', //2
                        'ケ', //3
                        'キ', //4
                        'エ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '共済年金',
                        '国民年金',
                        '労働者災害補償保険',
                        '生活保護',
                        '資力調査（ミーンズ・テスト）', //問６〜10
                    ]"
                    :labels="[
                        'ケ', //6
                        'イ', //7
                        'カ', //8
                        'オ', //9
                        'エ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    :note="SAME"
                    :contents="[
                        '平均寿命',
                        '7',
                        '速い',
                        '扶養',
                        '15〜64', //問11〜15
                    ]"
                    :labels="[
                        'ク', //11
                        'ウ', //12
                        'キ', //13
                        'カ', //14
                        'コ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    :note="SAME"
                    :contents="[
                        '年金',
                        '70',
                        '合計特殊出生率',
                        '下回って',
                        '労働力率', //問16〜20
                    ]"
                    :labels="[
                        'エ', //16
                        'ケ', //17
                        'イ', //18
                        'オ', //19
                        'コ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    :note="SAME"
                    :contents="[
                        '保険契約者の資格について制限はない（行為能力者である必要もない）', //p13
                        '正しい',
                        '保険金受取人の資格について制限はない（行為能力者である必要もない）', //p14
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '変動幅は大きくなる → 小さくなる', //p4
                        '商法 → 保険法', //p5
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    :note="SAME"
                    :contents="[
                        '65歳以上 → 第1号<br>40歳～65歳未満 → 第2号', //p140
                        '正しい',
                        '第1号被保険者および第2号被保険者 → 第1号被保険者のみ', //p141
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '長期 → 短期', //p69
                        '決済機能を持つ → 決済機能を持たない', //p69
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '従来と今日の内容が逆', //p184
                        '「ニーズを先取り〜」と「画一的商品を〜」が逆', //p184-185
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '正しい',
                        'ギルドは保障制度ではない', //p53
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '一般勘定資産の運用実績 → 特別勘定資産の運用実績', //p110
                        '正しい',
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
                        '分担金が年々増加 → 年々減少<br>給付金が増加 → 減少', //p56
                        '正しい',
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
                        '正しい',
                        '他の金融機関の年金型商品との相違がなくなっている → 優れた特色がある', //p190
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { label: '解', content: '正しい', note: SAME }, //31
                        { label: '解', content: '任意規定 → 強行規定' }, //32
                        { label: '解', content: 'ロイヤル・エクスチェンジ → エクイタブル', note: SAME }, //33
                        { label: '解', content: '正しい' }, //34
                        { label: '解', content: '日本の保険はこれらの類似制度から発展したものではない' }, //35 p72
                        { label: '解', content: '正しい' }, //36
                        { label: '解', content: '正しい', note: SAME }, //37
                        { label: '解', content: '消費者契約法 → 金融商品の販売等に関する法律（現在、金融サービス提供法に改称）' }, //38
                        { label: '解', content: '正しい' }, //39
                        { label: '解', content: '保証は全て撤廃 → 保証は継続' }, //40
                        // 問41〜50
                        { label: 'ウ', content: '不要式契約' }, //41
                        { label: 'オ', content: '', note: SAME }, //42
                        { label: 'ア', content: '10' }, //43
                        { label: 'イ', content: '財形住宅貯蓄積立保険' }, //44
                        { label: 'オ', content: '' }, //45
                        { label: 'エ', content: '生命保険会社各社の拠出' }, //46
                        { label: 'イ', content: '200%' }, //47
                        { label: 'エ', content: '財務大臣', note: SAME }, //48
                        { label: 'ウ', content: '保険金額' }, //49
                        { label: 'ア', content: '団体定期保険', note: SAME }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="souron2022b" next-route="souron2021a" />
        </section>
    </SeihoTestLayout>
</template>
