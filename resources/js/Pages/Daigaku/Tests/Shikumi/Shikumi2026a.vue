<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import QuestionTemp4 from "@/Components/QuestionTemp4.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険のしくみと個人保険商品";
const subject = "2026年度 フォームA";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp1
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約の形態"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '正しい',
                        '保険契約者、被保険者、保険金受取人とも別人である契約は、「[[他人]]のためにする生命保険契約」である。', //p2
                        '保険契約者と保険金受取人が同一人である契約は、「[[自己]]のためにする生命保険契約」である。', //p2
                        '保険契約者と保険金受取人が同一人で被保険者が別人である契約は、「[[他人]]の生命の保険契約」である。', //p3
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金等の請求手続き"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        'この通知義務について、[[保険法]]においては、被保険者が死亡した場合と給付事由が発生した場合について規定しているが、[[保険約款]]ではすべての保険事故について規定している。', //p30
                        '正しい',
                        '5年 → 3年', //p32
                        '生命保険の場合が[[５日以内]]、傷害疾病定額保険の場合が[[30日以内]]に保険金等を支払う旨を規定している。', //p33
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払込み"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '集金担当者等の取扱者による立替入金は「保険業法」で[[禁じられている]]。', //p13
                        '同一とは評価されない → 同一に評価される', //p14
                        '保険契約者が[[払込期月中の営業時間内に金融機関等の窓口やATM等で払い込んだ時点]]で、保険料を払い込んだことになる。', //p16
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金の支払い"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '正しい',
                        '失踪宣告があると、普通失踪者は[[７年の期間が満了したとき]]に死亡したものとみなされる。', //p23
                        '[[利害関係人]]の請求を受けて家庭裁判所が宣告するものである。', //p23
                        '高度障害保険金は支払われない → 高度障害保険金を支払う', //p24
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の失効・復活"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        'ほとんどの生命保険会社が「[[猶予期間の満了日の翌日から効力を失う]]」と規定している。', //p34
                        '保険契約者の解約返戻金の請求権は[[存続する]]。', //p35
                        '正しい',
                        '失効期間中に対する配当金が[[支払われる]]。', //p36
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当金（毎年配当型）の支払いと計算方法"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '次の事業年度の初日 → 次の事業年度の契約応答日', //p109
                        '（死差配当率） × （[[保険金 − 保険年度末保険料積立金]]）', //p109
                        '（利差配当率） × （[[保険年度末保険料積立金]]）', //p109
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '正しい',
                        '生命保険会社を「代理」の場合は[[告知受領権をも有する]]が、「媒介」の場合は[[告知受領権を有さない]]と解される。', //p72
                        '告知義務者が主観的に重要と判断したものについては[[対象とならない]]。', //p72
                        '告知義務違反とは告知義務者の故意または[[重大な過失]]によるものであること。', //p72
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約者貸付"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡保障を厚くする特約"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="医療保障を目的とした主契約"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="特約の種類"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済事業とその商品"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務違反による保険契約の解除"
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
                    questionTitle="保険契約の解約・取消し・無効等"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="責任開始の時期"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="身体的危険"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択の原理"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="超過危険の種類"
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
                    questionTitle="被保険者集団"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当金の支払方法（毎年配当型）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約転換制度"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約内容の変更"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="特定の疾病や損傷の治療に備える特約"
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
                    questionTitle="共済制度の特徴"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="生命保険会社の免責事由"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '保険法',
                        '信義誠実の原則',
                        '全保険期間',
                        '死亡させる意思',
                        '含まれない', // 問25〜29
                    ]"
                    :labels="[
                        'ア', //25
                        'エ', //26
                        'キ', //27
                        'カ', //28
                        'ク', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="選択効果"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '終局死亡率',
                        '実際死亡率',
                        '営業成績',
                        '期待死亡率',
                        'あったといえる', // 問30〜34
                    ]"
                    :labels="[
                        'コ', //30
                        'エ', //31
                        'キ', //32
                        'イ', //33
                        'ア', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="チルメル式保険料積立金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '付加保険料',
                        '純保険料',
                        '貯蓄保険料',
                        '危険保険料',
                        '平準純保険料式', // 問35〜39
                    ]"
                    :labels="[
                        'ク', //35
                        'オ', //36
                        'ケ', //37
                        'ア', //38
                        'キ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-08-24 確認済み
                            questionTitle: 'クーリング・オフ（契約撤回請求権）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-24 確認済み
                            questionTitle: '年払・半年払保険料の返還',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            // rev: 2026-08-24 確認済み
                            questionTitle: 'ＢＭＩ',
                            relatedProblems: [],
                            content: '正しい',
                        }, //42
                        {
                            // rev: 2026-08-24 確認済み
                            questionTitle: '契約内容登録制度等',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '契約確認',
                            relatedProblems: [],
                            content: '', //p
                        }, //44
                        {
                            questionTitle: '生命保険会社で使用している経験表',
                            relatedProblems: [],
                            content: '', //p
                        }, //45
                        {
                            // rev: 2026-08-24 確認済み
                            questionTitle: '保険料と責任準備金',
                            relatedProblems: [],
                            content: '正しい',
                        }, //46
                        {
                            // rev: 2026-08-24 確認済み
                            questionTitle: '保険料払込免除特約',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '変額保険・変額個人年金保険',
                            relatedProblems: [],
                            content: '', //p
                        }, //48
                        {
                            questionTitle: '少額短期保険業',
                            relatedProblems: [],
                            content: '', //p
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons next-route="daigaku.shikumi-kojin2025b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
