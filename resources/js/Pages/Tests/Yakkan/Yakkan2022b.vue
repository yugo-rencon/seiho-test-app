<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "約款と法律";
const subject = "2022年度 フォームB";
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
                    questionTitle="株式会社と相互会社-①"
                    :contents="[
                        '基金',
                        '基金償却積立金',
                        '10億',
                        '大規模経営',
                        '外国保険業者', // 問１〜５
                    ]"
                    :labels="[
                        'イ', //1
                        'ウ', //2
                        'ク', //3
                        'コ', //4
                        'ア', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式会社と相互会社-②"
                    :contents="[
                        '会社法',
                        '基準日',
                        '4ヶ月',
                        '社団',
                        '共益権', //問６〜10
                    ]"
                    :labels="[
                        'ア', //6
                        'ウ', //7
                        'ケ', //8
                        'キ', //9
                        'エ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="第三分野の保険-①"
                    :contents="[
                        '一定額',
                        'てん補',
                        '傷害',
                        '人の状態',
                        '死亡', //問11〜15
                    ]"
                    :labels="[
                        'ア', //11
                        'ク', //12
                        'オ', //13
                        'コ', //14
                        'エ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="第三分野の保険-②"
                    :contents="[
                        '不妊治療',
                        '老衰',
                        '介護',
                        '身体の',
                        '治療', //問16〜20
                    ]"
                    :labels="[
                        'ク', //16
                        'エ', //17
                        'カ', //18
                        'ケ', //19
                        'ア', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険の区分"
                    :contents="[
                        '正しい',
                        '非営利保険 → 相互保険', //p4-5
                        '保険契約者に帰属 → 保険者に帰属', //p5
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="クーリング・オフ制度"
                    :contents="[
                        '告知日 → 申込日', //p45
                        '正しい',
                        'クーリング・オフ制度の適用 → クーリング・オフを取り扱わない', //p46
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業の監督体制"
                    :contents="[
                        '正しい',
                        '財務大臣 → 金融庁長官', //p200
                        '金融庁長官 → 財務大臣', //p200
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険会社の合併"
                    :contents="[
                        '正しい',
                        '保険株式会社にすることができる → 相互会社であることを要する。', //p251
                        '保険法 → 会社法', //p251
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険仲立人"
                    :contents="[
                        '保険金の額にかかわらず供託しなければならない → 保険金の額に応じて供託しないことができる', //p270
                        '正しい',
                        '明らかにする必要はない → 明らかにしなければならない', //p270-271
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等の性質"
                    :contents="[
                        '正しい',
                        '要式契約 → 不要式契約（申込書提出や保険証券発行は事務処理上の便宜）', //p35
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険募集人"
                    :contents="[
                        '正しい',
                        '保険契約の締結の媒介または請負を行う者 → 保険契約の締結の代理または媒介を行う者', //p47
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="疾病入院特約の手術給付金の支払"
                    :contents="[
                        '正しい',
                        '正しい',
                        '支払額を合計して支払う → 最も給付倍率の高い手術のみで計算', //p184
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務"
                    :contents="[
                        '強制しうる権利を有する → 権利を有しない<br>損害を賠償をする義務を負う → 義務を負わない', //p48
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="基礎書類"
                    :contents="[
                        '正しい',
                        '正しい',
                        '保険料の収受および保険金等の支払に関する事項は、算出方法書ではなく事業方法書の内容', //p218-220
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '生命保険契約等の要素', content: '正しい' }, //31
                        { questionTitle: '団体（集団）扱特約', content: '給与から団体に引き落とされた時 → 団体から生命保険会社に払い込まれた時' }, //32 p92
                        { questionTitle: '死亡保険金の免責', content: '正しい' }, //33
                        { questionTitle: '書面交付義務', content: '成立要件となっている → 成立要件ではない' }, //34 p54
                        { questionTitle: '復活の法的性格', content: '新契約説 → 特別契約説' }, //35 p105
                        { questionTitle: '保険契約者の変更', content: '保険受取人の同意 → 被保険者の同意' }, //36 p149
                        { questionTitle: '監督の方法', content: '正しい' }, //37
                        { questionTitle: '組織変更', content: '正しい' }, //38
                        { questionTitle: 'ソルベンシー・マージン比率', content: '土地の含み益も計算の要素としている' }, //39 p248
                        { questionTitle: '外国保険業者', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '金融サービスの提供に関する法律', label: 'ウ', content: '元本欠損' }, //41
                        { questionTitle: '生命保険契約等の性質', label: 'エ', content: '善意' }, //42
                        { questionTitle: '消費者契約法', label: 'ア', content: '困惑' }, //43
                        { questionTitle: '生命保険契約等の効力', label: 'オ', content: '' }, //44
                        { questionTitle: '生死不明の場合の取扱', label: 'イ', content: '生命保険会社' }, //45
                        { questionTitle: '解除権', label: 'ア', content: '1ヶ月' }, //46
                        { questionTitle: '給付金の免責事由', label: 'オ', content: '' }, //47
                        { questionTitle: '保険契約準備金', label: 'エ', content: '責任準備金' }, //48
                        { questionTitle: '保険計理人', label: 'ウ', content: '7年' }, //49
                        { questionTitle: '保険募集の制限', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="yakkan2022a" next-route="yakkan2022c" />
        </section>
    </SeihoTestLayout>
</template>
