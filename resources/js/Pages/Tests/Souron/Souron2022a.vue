<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2022年度 フォームA";

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
                        '契約自由',
                        '債権債務',
                        '経済的',
                        '保険法',
                        '商法', // 問１〜５
                    ]"
                    :labels="[
                        'ケ', //1
                        'ウ', //2
                        'エ', //3
                        'イ', //4
                        'キ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '拘束',
                        '法規範説',
                        '定型的取引',
                        '保険約款',
                        '強行', //問６〜10
                    ]"
                    :labels="[
                        'ウ', //6
                        'ア', //7
                        'キ', //8
                        'カ', //9
                        'イ', //10
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
                        '予定利率 → 新契約費', //p63
                        '会社の株主 → 会社の役員', //p64
                        '正しい',
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
                        '正しい',
                        '保険業 → 保険契約者', //p150
                        '保険会社の子会社の業務範囲に制限なし → 制限あり',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '死亡保険金500万円 → 300万円<br>入院給付金100万円 → 80万円', //p176
                        '1500万円 → 1000万円', //p176
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '制御を超えていないもの → 制御を超えているもの', //p4
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '正しい',
                        '第1次選択 → 逆選択', //p17
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
                        'ドイツ → 英米', //p72
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '正しい',
                        '一般勘定資産と大きく異なる → 一般勘定資産と大きく異ならない', //p110
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { label: '解', content: '正しい', note: SAME }, //31
                        { label: '解', content: '正しい' }, //32
                        { label: '解', content: 'ロイヤル・エクスチェンジ → エクイタブル', note: SAME }, //33
                        { label: '解', content: '決済機能を持ち → 決済機能は持たない' }, //34
                        { label: '解', content: '正しい' }, //35
                        { label: '解', content: '正しい' }, //36
                        { label: '解', content: '正しい', note: SAME }, //37
                        { label: '解', content: '正しい' }, //38
                        { label: '解', content: '損害保険 → 生命保険' }, //39
                        { label: '解', content: '従来と今日の内容が逆' }, //40
                        // 問41〜50
                        { label: 'ウ', content: '保険料' }, //41
                        { label: 'オ', content: '', note: SAME }, //42
                        { label: 'イ', content: '経過年数' }, //43
                        { label: 'イ', content: '友愛組合' }, //44
                        { label: 'エ', content: '低く' }, //45
                        { label: 'ア', content: '負債' }, //46
                        { label: 'ア', content: '保険料の拠出' }, //47
                        { label: 'エ', content: '財務大臣', note: SAME }, //48
                        { label: 'オ', content: '' }, //49
                        { label: 'ア', content: '団体定期保険', note: SAME }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="souron2023c" next-route="souron2022b" />
        </section>
    </SeihoTestLayout>
</template>
