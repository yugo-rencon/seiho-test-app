<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税・相続";
const subject = "2024年度 フォームB";
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
                    questionTitle="所得税の申告と納税"
                    :relatedProblems="['2024b1']"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人事業税および法人事業税"
                    :relatedProblems="['2024b2']"
                    :contents="[
                        // rev: 2026-06-13 確認済み
                        '法人税の計算においては[[損金の額に算入される]]。', //p219
                        '正しい',
                        '事業を行う法人はすべて納税義務者であるが、国、都道府県、市町村等の公共法人、[[林業、鉱物の掘採事業等を行う法人]]には課税されない。', //p219
                        '事業年度の所得金額 → 事業年度の収入金額', //p219
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会政策に配慮した所得控除に関する知識（生命保険料控除）"
                    :relatedProblems="['2024b3']"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続財産の評価"
                    :relatedProblems="['2024b4', '2024c19']"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続の承認と放棄"
                    :relatedProblems="['2024a5', '2024b5', '2024c5']"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="みなし贈与財産"
                    :relatedProblems="['2024b6']"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="遺贈と遺言"
                    :relatedProblems="['2024a7', '2024b7', '2024c7']"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続時精算課税制度"
                    :relatedProblems="['2024a8', '2024b8', '2024c8']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '相続時精算課税制度の適用対象者は、60歳以上の贈与者の推定相続人である子または孫で、[[子の代襲相続人も含む]]。', //p156
                        '相続時精算課税制度の適用対象となる贈与財産の種類、金額、[[贈与回数に制限はない]]。', //p155
                        '1月25日から3月15日 → 2月1日から3月15日', //p155
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="こども保険に関する税務"
                    :relatedProblems="['2024a9', '2024b9', '2024c9']"
                    :contents="[
                        // rev: 2026-06-18 確認済み
                        '一時所得の金額は、[[満期保険金（または祝金）－（既払込保険料合計額－既受取祝金の合計額）－50万円（特別控除額）]]で計算する。本問の場合、100万円 －（200万円 －（30万円 ＋ 70万円））－50万円 ＝ －50万円となり、[[一時所得は発生しない]]。', //p165
                        '一時所得の金額 ＝ 死亡保険金（給付金）＋  積立配当金 －（既払込保険料合計額 － 既受取済祝金の合計額）[[－50万円（特別控除額）]]', //p165
                        '以後、祝金や満期保険金の支払いがあった場合には[[一時所得としての課税対象となる]]。', //p165
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人年金保険に関する税務"
                    :relatedProblems="['2024a20', '2024b10']"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人住民税"
                    :relatedProblems="['2024b11']"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人向け生命保険に係る課税関係"
                    :relatedProblems="['2024b12']"
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
                    questionTitle="所得の種類"
                    :relatedProblems="['2024a1', '2024b13']"
                    :contents="[
                        // rev: 2026-06-09 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '[[総合課税の対象となる譲渡所得と分離課税の対象となる譲渡所得があり]]、また、資産の譲渡でも譲渡所得に該当しない所得がある。', //p20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人住民税"
                    :relatedProblems="['2024a14', '2024b14', '2024c14']"
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
                    questionTitle="相続制度"
                    :relatedProblems="['2024a15', '2024b15']"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="退職金・企業年金についての税金の知識"
                    :relatedProblems="['2024a16', '2024b16', '2024c16']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定申告の訂正と税務調査・処分"
                    :relatedProblems="['2024b17', '2024c17']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '訂正申告 → 更正の請求', //p61
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税"
                    :relatedProblems="['2024b18']"
                    :contents="[
                        // rev: 2026-06-14 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '5年 → 2年', //p145
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の計算"
                    :relatedProblems="['2024a17', '2024b19', '2024c6']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約内容等の変更に関する税務（個人契約）"
                    :relatedProblems="['2024a19', '2024b20']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院給付金等に関する税務"
                    :relatedProblems="['2024a21', '2024b21', '2024c21']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '医療費控除の確定申告により還付申告をする際には、交通事故等により、医療費控除の対象となる被害者（生計を一にする家族を含む）が受け取った治療費の金額（損害賠償金）も、支払った医療費から[[差し引いて申告しなければならない]]。', //p177
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="同族会社の特別規定"
                    :relatedProblems="['2024a22', '2024b22']"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税の損金についての特別規定"
                    :relatedProblems="['2024a23', '2024b23', '2024c23']"
                    :contents="[
                        // rev: 2026-06-18 確認済み
                        '正しい',
                        '寄附金は、法人の事業に直接関係のない支出であり、[[損金算入には一定の制限が設けられている]]。', //p209
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="福利厚生プラン"
                    :relatedProblems="['2024b24', '2024c24']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '正しい',
                        '「年」満期で保険期間が全員同一の場合は、被保険者全員の契約が同時に満期を迎えるため、満期保険金と資産計上していた保険料積立金との差額が[[雑収入となり、大幅な利益が上がる可能性がある]]。', //p255
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="給与所得者の税金"
                    :relatedProblems="['2024b25']"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問25〜29
                    ]"
                    :labels="[
                        'ア', //25
                        'カ', //26
                        'イ', //27
                        'コ', //28
                        'ク', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="公的年金等についての税金の知識"
                    :relatedProblems="['2024a30', '2024b30', '2024c30']"
                    :contents="[
                        // rev: 2026-06-13 確認済み
                        '遺族',
                        '日本年金機構',
                        '裁定',
                        '5.105',
                        '400万円', // 問30〜34
                    ]"
                    :labels="[
                        'ク', //30
                        'オ', //31
                        'ケ', //32
                        'エ', //33
                        'カ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="法人税"
                    :relatedProblems="['2024b35', '2024c35']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '非課税',
                        '日本国内',
                        '益金算入・損金不算入',
                        '申告調整',
                        '配当', // 問35〜39
                    ]"
                    :labels="[
                        'ウ', //35
                        'コ', //36
                        'カ', //37
                        'イ', //38
                        'ク', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問40〜49
                        {
                            questionTitle: '配当所得に対する課税の特例',
                            relatedProblems: ['2024b40'],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '譲渡所得',
                            relatedProblems: ['2024b41'],
                            content: '正しい',
                        }, //41
                        {
                            // rev: 2026-06-21 確認済み
                            questionTitle: '住宅借入金等特別控除（住宅ローン控除）',
                            relatedProblems: ['2024a2', '2024b42', '2024c25'],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '退職後、再就職しなかった場合の確定申告',
                            relatedProblems: ['2024b43'],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '相続税の非課税財産',
                            relatedProblems: ['2024a44', '2024b44', '2024c44'],
                            content: '',
                        }, //44
                        {
                            questionTitle: '遺留分の放棄',
                            relatedProblems: ['2024b45'],
                            content: '',
                        }, //45
                        {
                            // rev: 2026-06-15 確認済み
                            questionTitle: '暦年課税の贈与税額計算の仕組み',
                            relatedProblems: ['2024a46', '2024b46', '2024c46'],
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: 'リビング・ニーズ特約',
                            relatedProblems: ['2024b47'],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '棚卸資産の評価',
                            relatedProblems: ['2024b48'],
                            content: '',
                        }, //48
                        {
                            questionTitle: '法人が受け取る保険金・給付金等',
                            relatedProblems: ['2024a49', '2024b49', '2024c49'],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.zei2024a" next-route="daigaku.zei2024c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
