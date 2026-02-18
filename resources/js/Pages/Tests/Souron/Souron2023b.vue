<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2023年度 フォームB";

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
                        '1年',
                        '損金',
                        '総合福祉',
                        'ヒューマン',
                        '供与', // 問１〜５
                    ]"
                    :labels="[
                        'イ', //1
                        'ケ', //2
                        'ウ', //3
                        'オ', //4
                        'コ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '受給権',
                        '拠出型',
                        '報酬比例部分',
                        '第1号',
                        '運用の指図', //問６〜10
                    ]"
                    :labels="[
                        'カ', //6
                        'イ', //7
                        'ア', //8
                        'エ', //9
                        'ケ', //10
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
                        '保険加入希望が弱く、低額の保険を選ぶ → 保険加入希望が強く、高額な保険を選ぶ', //p17
                        '効率性 → 公平性', //p18
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '65歳以上 → 第1号<br>40歳～65歳未満 → 第2号', //p140
                        '第1号被保険者および第2号被保険者ともに → 第1号被保険者のみ', //p140
                        '正しい',
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
                        '正しい',
                        '死亡保険金500万円 → 300万円<br>損害保険金500万円 → 1000万円', //p176
                        '2000万以上の資本金 → 1000万円以上の資本金 + 内閣総理大臣への登録', //p176
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '5% → 7%', //p180
                        '正しい',
                        '人口減少にいたっていない → 出生数が死亡数を下回って人口が減少している', //p182
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
                        '保険約款の効力は生じない → 保険約款には拘束力がある', //p8
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
                        '正しい',
                        '裁定審査会と生命保険相談所が逆', //p83
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '登録制 → 免許制', //p150
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { label: '解', content: '保険業法 → 保険法' }, //31
                        { label: '解', content: '正しい' }, //32
                        { label: '解', content: '正しい', note: SAME }, //33
                        { label: '解', content: '正しい' }, //34
                        { label: '解', content: '正しい' }, //35
                        { label: '解', content: '重要性は非常に高い → 低い' }, //36
                        { label: '解', content: '100株未満 → 1株未満', note: SAME }, //37
                        { label: '解', content: '3段階 → 2段階（JA（単位農協）、JA共済連）', note: SAME }, //38
                        { label: '解', content: '正しい' }, //39
                        { label: '解', content: '正しい' }, //40
                        // 問41〜50
                        { label: 'ア', content: '付合契約' }, //41
                        { label: 'ア', content: '負債', note: SAME }, //42
                        { label: 'ウ', content: '20%' }, //43
                        { label: 'エ', content: '同額の分担金で' }, //44
                        { label: 'イ', content: '更生手続', note: SAME }, //45
                        { label: 'ア', content: '家計可処分所得', note: SAME }, //46
                        { label: 'オ', content: '' }, //47
                        { label: 'オ', content: '' }, //48
                        { label: 'イ', content: '長期火災保険' }, //49
                        { label: 'ウ', content: '変額年金' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="souron2023a" next-route="souron2023c" />
        </section>
    </SeihoTestLayout>
</template>
