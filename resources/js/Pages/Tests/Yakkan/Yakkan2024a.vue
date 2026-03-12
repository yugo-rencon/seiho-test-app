<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "約款と法律";
const subject = "2024年度 フォームA";
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
                    questionTitle="クーリング・オフ制度-①"
                    :contents="[
                        '承諾',
                        '商事特別法',
                        '申込日',
                        '8日',
                        '第1回保険料相当額', // 問１〜５
                    ]"
                    :labels="[
                        'カ', //1
                        'オ', //2
                        'コ', //3
                        'ア', //4
                        'ク', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="クーリング・オフ制度-②"
                    :contents="[
                        '1年',
                        '申込者等が自ら指定した',
                        '医師の診査',
                        '債務',
                        '更改、更新', // 問6〜10
                    ]"
                    :labels="[
                        'ア', //6
                        'コ', //7
                        'ウ', //8
                        'ク', //9
                        'カ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡保険金の免責事由-①"
                    :contents="[
                        '射倖',
                        '善意',
                        '保険契約者',
                        'は要しない',
                        'は含まれない', // 問11〜15
                    ]"
                    :labels="[
                        'イ', //11
                        'ウ', //12
                        'ク', //13
                        'キ', //14
                        'カ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡保険金の免責事由-②"
                    :contents="[
                        '緩和',
                        '残額',
                        '自殺',
                        '生命保険会社',
                        '責任準備金', // 問16〜20
                    ]"
                    :labels="[
                        'ア', //16
                        'カ', //17
                        'キ', //18
                        'ク', //19
                        'ケ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等に対する法の適用"
                    :contents="[
                        '典型契約 → 無名契約', //p4
                        '民法の一般規定が適用されない → 適用される', //p4
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等の性質"
                    :contents="[
                        '要物契約 → 諾成契約（保険契約は当事者の合意のみで成立し、第1回保険料払込は責任開始の要件にすぎない）', //p35
                        '正しい',
                        '付合契約 → 射倖契約', //p36
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当金の支払"
                    :contents="[
                        '正しい',
                        '規定しないのが一般的 → 規定するのが一般的', //p159-160
                        '消滅時特別配当 → 社員配当平衡積立金', //p159
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="外国保険業者等"
                    :contents="[
                        '株式会社または相互会社でなければならない → 株式会社や相互会社でなくてもよく、個人でもよい', //p256
                        '10億円 → 2億円', //p257
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の締結または保険募集に関する禁止行為"
                    :contents="[
                        '将来における配当に関して断定的判断を示すことは禁止の対象とならない → 禁止の対象となる', //p267
                        '基礎書類に基づく行為でも禁止 → 基礎書類に基づいた行為は禁止されていない', //p266
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険約款の拘束力の根拠"
                    :contents="[
                        '意思推定説 → 法規範説', //p7
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払込"
                    :contents="[
                        '正しい',
                        '正しい',
                        '保険料を差し引かない → 差し引く', //p88
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="災害入院給付金の支払"
                    :contents="[
                        '正しい',
                        '正しい',
                        '180日 → 120日', //p175
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="基礎書類"
                    :contents="[
                        '正しい',
                        '普通保険約款 → 保険料及び責任準備金の算出方法書', //p219-220
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="責任準備金"
                    :contents="[
                        '正しい',
                        '正しい',
                        '3つの区分 → 4つの区分（保険料積立金・未経過保険料・払戻積立金・危険準備金）', //p242
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '生命保険契約等の定義', content: '正しい' }, //31
                        { questionTitle: '保険料の返還', content: '正しい' }, //32
                        { questionTitle: '保険契約者の保険料支払', content: '片面的強行規定 → 商法または民法の一般原則' }, //33 p54
                        { questionTitle: '保険給付請求権の譲渡等', content: '保険契約者の同意 → 被保険者の同意' }, //34 p58
                        { questionTitle: '給付事由発生の通知等', content: ' 保険者は保険給付の責任を免れる → 責任を免れることはない' }, //35 p60
                        { questionTitle: '保険契約者の住所変更', content: '一般原則を適用する性質を有する → 性質を有するものではない' }, //36 p109
                        { questionTitle: '災害入院特約と疾病入院特約', content: '4日不担保等の免責規定が適用される → 適用されない' }, //37 p178
                        { questionTitle: 'resources/js/Pages/Tests/Yakkan/Yakkan2024a.vueの比較', content: '一般社団法人 → 中間法人' }, //38 p225
                        { questionTitle: '保険計理人', content: '正しい' }, //39
                        { questionTitle: '乗合の禁止', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '金融サービスの提供及び利用環境の整備等に関する法律', label: 'ア', content: '重要事項' }, //41
                        { questionTitle: '保険法に規定する同意', label: 'ウ', content: '成立要件' }, //42
                        { questionTitle: '生命保険契約等の解除の効力等', label: 'オ', content: '' }, //43
                        { questionTitle: '保険料の未払込による保険契約の失効', label: 'イ', content: '猶予期間' }, //44
                        { questionTitle: '告知義務違反に対する解除権の行使', label: 'イ', content: '5年' }, //45
                        { questionTitle: '延長保険', label: 'ウ', content: '定期保険' }, //46
                        { questionTitle: '年齢の計算、誤りの処理', label: 'オ', content: '' }, //47
                        { questionTitle: '保険業法の目的', label: 'オ', content: '' }, //48
                        { questionTitle: '保険会社の業務の範囲', label: 'イ', content: '法定他業' }, //49
                        { questionTitle: '保険募集の制限', label: 'ウ', content: '媒介' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons next-route="yakkan2024b" />
        </section>
    </SeihoTestLayout>
</template>
