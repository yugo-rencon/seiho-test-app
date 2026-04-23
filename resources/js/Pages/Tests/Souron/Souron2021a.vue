<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2021年度 フォームA";


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
                    questionTitle="契約者配当-①"
                    :contents="[
                        '負債',
                        '定款',
                        '20%',
                        '非社員契約',
                        '公平性', // 問１〜５
                    ]"
                    :labels="[
                        'コ', //1
                        'ク', //2
                        'イ', //3
                        'エ', //4
                        'キ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約者配当-②"
                    :contents="[
                        '利源分析',
                        '増加',
                        '上回る',
                        '解約益',
                        '小さく', //問６〜10
                    ]"
                    :labels="[
                        'キ', //6
                        'ア', //7
                        'オ', //8
                        'ケ', //9
                        'エ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済と保険-①"
                    :contents="[
                        '損害共済',
                        '給付・反対給付均等',
                        '相互扶助',
                        '金融庁',
                        '多種多様', //問11〜15
                    ]"
                    :labels="[
                        'キ', //11
                        'イ', //12
                        'ケ', //13
                        'ク', //14
                        'エ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済と保険-②"
                    :contents="[
                        '軽い',
                        'JA共済',
                        '構成員外',
                        '無認可共済',
                        '少額短期保険業者', //問16〜20
                    ]"
                    :labels="[
                        'ウ', //16
                        'カ', //17
                        'ク', //18
                        'エ', //19
                        'キ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の対象となる危険とその特色"
                    :contents="[
                        '正しい',
                        '生命保険全体ではなく、死亡保険についての説明である。', //p5
                        '保険業法 → 保険法', //p5
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険の選択"
                    :contents="[
                        '選択医 → 診査医', //p17
                        '生命保険支払専門士 → 生命保険面接士', //p17
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="早期是正措置の導入と保険業法の一部改正"
                    :contents="[
                        '責任準備金の積立度合を示す → 保険金の支払い余力を示す', //p99
                        '正しい',
                        '既契約の予定利率引き上げ → 既契約の予定利率の引き下げ', //p100
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保険の特質"
                    :contents="[
                        '負担能力に応じて年齢別に → 負担能力に応じて（年齢は無関係）', //p125
                        '被保険者・事業主・国庫がそれぞれ1/3 → 被保険者と事業主がそれぞれ1/2', //p125
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="損害保険"
                    :contents="[
                        '正しい',
                        '第三分野：生損保本体での相互参入<br>それ以外の分野：子会社方式で相互参入', //p173
                        '第三分野商品（新種保険・賠償責任保険等） → 第三分野商品（傷害保険・がん保険等）', //p174
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約の要素"
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
                    questionTitle="消費者へのPR活動等"
                    :contents="[
                        '正しい',
                        '正しい',
                        '金融調停審査会制度 → 金融分野における裁判外紛争解決制度（金融ADR制度）', //p84
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産運用の現状"
                    :contents="[
                        '貸付金 ↔︎ 有価証券', //p111-113
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険監督の方法"
                    :contents="[
                        '正しい',
                        '日本では実体的監督主義が採用されている', //p148
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会構造の変化"
                    :contents="[
                        '正しい',
                        '正しい',
                        '人口減少にいたっていない → 出生数が死亡数を下回って人口が減少している', //p182
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '危険対策と保険', content: '正しい' }, //31
                        { questionTitle: '責任準備金', content: '自然保険料方式 ↔︎ 平準保険料方式' }, //32
                        { questionTitle: '保険の生成・発展', content: '正しい' }, //33
                        { questionTitle: 'アームストロング調査', content: '合衆国統一の取締法 → ニューヨーク州の取締法' }, //34 p63
                        { questionTitle: '保有契約高と国民所得', content: '正しい' }, //35
                        { questionTitle: '生命保険会社の資金の性格', content: '純資産の大部分 → 負債の大部分' }, //36
                        { questionTitle: '公的介護保険性の被保険者', content: '65歳以上 → 第1号<br>40歳～65歳未満 → 第2号' }, //37
                        { questionTitle: 'ソルベンシー・マージン比率', content: '分子の1/2が誤り（1/2は分母側）' }, //38
                        { questionTitle: '簡易保険の歴史', content: '正しい' }, //39
                        { questionTitle: '生命保険業界の国際化', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '契約の法的性質', label: 'ウ', content: '諾成方式' }, //41
                        { questionTitle: '保険事故の発生', label: 'ア', content: '保険金' }, //42
                        { questionTitle: '養老保険', label: 'エ', content: '逓減定期保険' }, //43
                        { questionTitle: '賦課式保険', label: 'エ', content: '同額の分担金で' }, //44
                        { questionTitle: '近代的生命保険の導入', label: 'オ', content: '' }, //45
                        { questionTitle: '国民経済における生命保険', label: 'オ', content: '' }, //46
                        { questionTitle: '公的医療保険', label: 'イ', content: '国民皆保険' }, //47
                        { questionTitle: '保険に関する法律', label: 'ア', content: '金融商品取引法' }, //48
                        { questionTitle: '銀行・証券業界', label: 'ウ', content: '個人年金' }, //49
                        { questionTitle: '共同ネットワークシステム', label: 'イ', content: 'LINC（Life Insurance Network Center）' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="souron2022c" next-route="souron2021b" />
        </section>
    </SeihoTestLayout>
</template>
