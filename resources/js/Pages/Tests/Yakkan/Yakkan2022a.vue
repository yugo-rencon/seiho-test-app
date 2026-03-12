<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "約款と法律";
const subject = "2022年度 フォームA";
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
                    questionTitle="第三者のためにする生命保険契約等"
                    :contents="[
                        '自己',
                        '民法',
                        '受益の意思表示',
                        '自己固有の権利',
                        'するのではない', // 問１〜５
                    ]"
                    :labels="[
                        'イ', //1
                        'ケ', //2
                        'エ', //3
                        'ウ', //4
                        'カ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="被保険者の同意"
                    :contents="[
                        '賭博的行為',
                        '死亡保険契約',
                        '傷害疾病定額保険契約',
                        '効力発生',
                        '保険会社向けの総合的な監督指針', //問６〜10
                    ]"
                    :labels="[
                        'ク', //6
                        'キ', //7
                        'カ', //8
                        'エ', //9
                        'ケ', //10
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
                    questionTitle="保険約款"
                    :contents="[
                        '金融庁長官 → 内閣総理大臣', //p11
                        '無効 → 有効', //p11
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等の当事者、その他の関係者"
                    :contents="[
                        '契約は無効 → 契約は取り消されることがある', //p37
                        '一契約における被保険者は必ず1人であることを要する → 必ずしも1人であることを要しない', //p39
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当金の支払"
                    :contents="[
                        '正しい',
                        '規定されていない → 規定されている', //p159-160
                        '消滅時特別配当 → 社員配当平衡積立金', //p159
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の経理"
                    :contents="[
                        '年2回決算できる → 年2回決算は難しい', //p238
                        '財務局 → 金融庁長官', //p238
                        '正しい',
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
                    questionTitle="保険約款の拘束力の根拠"
                    :contents="[
                        '正しい',
                        '正しい',
                        '白地慣習法説は慣習法説ともいう → 白地慣習法説と慣習法説は別（本記述は慣習法説の説明）', //p7-8
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="自動振替貸付"
                    :contents="[
                        '貸付を受けない旨の申出があった場合でも貸付を行う → 貸付を行わない', //p101
                        '正しい',
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
                    questionTitle="保険持株会社"
                    :contents="[
                        '正しい',
                        '自由に営むことができる → 営むことができない', //p216
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
                        { questionTitle: '生命保険契約等に対する法の適用', content: '営利保険 → 相互保険' }, //31 p5
                        { questionTitle: '契約者保護のための法律', content: '正しい' }, //32
                        { questionTitle: '個人情報取扱事業者の義務', content: '倫理委員会 → 個人情報保護委員会' }, //33 p27
                        { questionTitle: '書面交付義務', content: '成立要件となっている → 成立要件ではない' }, //34 p54
                        { questionTitle: '復活の法的性格', content: '新契約説 → 特別契約説' }, //35 p105
                        { questionTitle: '災害入院特約と疾病入院特約', content: '正しい' }, //36
                        { questionTitle: '再保険', content: '正しい' }, //37
                        { questionTitle: '株式会社と相互会社の比較', content: '一般社団法人 → 中間法人' }, //38 p225
                        { questionTitle: '免許取消', content: '金融庁長官 → 内閣総理大臣' }, //39 p201
                        { questionTitle: '外国保険業者', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '金融サービスの提供に関する法律', label: 'ウ', content: '元本欠損' }, //41
                        { questionTitle: '生命保険契約等の性質', label: 'エ', content: '善意' }, //42
                        { questionTitle: 'クーリング・オフ制度', label: 'イ', content: '申込日' }, //43
                        { questionTitle: '高度障害保険金', label: 'ア', content: '両眼の視力' }, //44
                        { questionTitle: '保険金の支払場所', label: 'エ', content: '取立債務' }, //45
                        { questionTitle: '保険契約の取消し', label: 'ア', content: '保険金受取人' }, //46
                        { questionTitle: '保険業法の目的', label: 'オ', content: '' }, //47
                        { questionTitle: '基礎書類', label: 'ウ', content: '定款' }, //48
                        { questionTitle: '相互会社の剰余金', label: 'イ', content: '1,000' }, //49
                        { questionTitle: '保険募集の制限', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="yakkan2023c" next-route="yakkan2022b" />
        </section>
    </SeihoTestLayout>
</template>
