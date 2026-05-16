<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険応用課程試験";
const subject = "2025年度 8月〜3月実施 フォームD";
const isDraft = true;
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />

            <DraftNotice v-if="isDraft" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp1
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得の種類"
                    :relatedProblems="[]"
                    :contents="[
                        '収入金額は、金銭で支給されたものに限られ、一般に現物給与といわれている物品やその他の経済的利益は含まれない → 収入金額は必ずしも金銭で支給されたものに限らず、一般に現物給与といわれている物品やその他の経済的利益も含まれる', //p15
                        '事業所得の金額とは総収入金額のこと → 事業所得の金額とは総収入金額から、その収入を得るために支出した金額（必要経費）を差し引いた金額のこと', //p16
                        '1/3 → 1/2', //p17
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の課税財産と非課税財産"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約形態による課税関係"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '一時所得として所得税の課税対象 → 贈与税の課税対象', //p59
                        '贈与税の課税対象 → 相続税（保険金非課税の取り扱い有り）の課税対象', //p59
                        '雑所得として所得税の課税対象 → 一時所得として所得税の課税対象', //p59
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人の住民税・事業税"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金制度"
                    :relatedProblems="[]"
                    :contents="[
                        '企業が掛金を拠出する「企業型」（iDeCo）と加入者個人が掛金を拠出する「個人型」 → 企業が掛金を拠出する「企業型」と加入者個人が掛金を拠出する「個人型」（iDeCo）', //p93
                        '掛金の拠出限度額はない → 拠出限度額の範囲内で掛金を拠出することができる', //p94
                        '老齢給付金や障害給付金があるが、死亡一時金や脱退一時金はない → 老齢給付金、障害給付金、死亡一時金および脱退一時金がある', //p98
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金の税務"
                    :relatedProblems="[]"
                    :contents="[
                        '所得控除の対象とはならない → 全額所得控除（小規模企業共済等掛金控除）の対象', //p98
                        '正しい',
                        '例外なく所得税の課税対象 → 所定の手続きを前提として、所得税は非課税', //p99
                        '雑所得として所得税の課税対象 → 非課税', //p99
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="現価計算"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="勤労者財産形成制度（財形制度）"
                    :relatedProblems="[]"
                    :contents="[
                        '600万円 → 550万円', //p117
                        '一律15% → 一律20%', //p117
                        '正しい',
                        '多くの個人保険商品と同様、積立金等の計算の基礎（予定利率）は固定しており、変更されることはない → 多くの個人保険商品と異なり、積立金等の計算の基礎（予定利率）は変更される場合がある', //p117
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度の障害給付と遺族給付の内容"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="募集時の正しい説明"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金等の請求と支払い"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の所得控除"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の申告手続と納付方法"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '課税価格の合計額が基礎控除額以下である場合でも相続税の申告が必要 → 相続税の申告は不要', //p52
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続対策"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="企業市場"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人の住民税・事業税"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '事業所の所在地に応じて課せられる「地方割」 → 法人税額に応じて課せられる「法人税割」', //p79
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定給付企業年金制度"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="経営者保険の税務"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険の税務"
                    :relatedProblems="[]"
                    :contents="[
                        '特約保険料は損金算入できない → 特約保険料も含めて全額を損金算入できる', //p86
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="金利"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金（基礎年金）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険募集人が遵守すべき法令等（保険業法）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="解約手続きの留意点"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '解約請求できるのは契約者と被保険者 → 契約者のみ<br>契約者・被保険者の意思確認 → 契約者の意思確認', //p174
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="公的年金制度の老齢給付の内容"
                    :relatedProblems="[]"
                    :contents="[
                        '保険料納付済',
                        '裁定請求',
                        '減額',
                        '増額',
                        '報酬比例', // 問25〜29
                    ]"
                    :labels="[
                        'オ', //25
                        'イ', //26
                        'ウ', //27
                        'エ', //28
                        'コ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="募集上の禁止行為"
                    :relatedProblems="[]"
                    :contents="[
                        '虚偽の説明',
                        '虚偽告知教唆',
                        '団体',
                        '威迫',
                        '誹謗・中傷', // 問30〜34
                    ]"
                    :labels="[
                        'キ', //30
                        'オ', //31
                        'ケ', //32
                        'ウ', //33
                        'イ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="相続税額の計算"
                    :relatedProblems="[]"
                    :contents="[
                        '12000',
                        '1137',
                        '6038',
                        '1569',
                        '1137', // 問35〜39
                    ]"
                    :labels="[
                        'ア', //35
                        'ケ', //36
                        'カ', //37
                        'ク', //38
                        'ケ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問40〜49
                        {
                            questionTitle: '相続財産の評価',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '所得税の税額控除',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '相続時精算課税制度',
                            relatedProblems: [],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '個人の住民税',
                            relatedProblems: [],
                            content: '', //p
                        }, //43
                        {
                            questionTitle: '法人税の仕組み',
                            relatedProblems: [],
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '医療保障保険（団体型）',
                            relatedProblems: [],
                            content: '', //p
                        }, //45
                        {
                            questionTitle: '複利型商品',
                            relatedProblems: [],
                            content: '', //p
                        }, //46
                        {
                            questionTitle: '消費者契約法',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '保険法',
                            relatedProblems: [],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '失効（復活）手続きの留意点',
                            relatedProblems: [],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-href="/ouyou/2025-h2-c" next-href="/ouyou/2024-h1-a" home-route="ouyou.index" />
        </section>
    </SeihoTestLayout>
</template>
