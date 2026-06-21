<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税・相続";
const subject = "2024年度 フォームC";
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
                    questionTitle="退職所得金額の計算"
                    :relatedProblems="['2024c1']"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定申告"
                    :relatedProblems="['2024c2']"
                    :contents="[
                        '1月16日から2月15日 → 2月16日から3月15日', //p37
                        '正しい',
                        '確定申告をする必要がある。', //p38
                        '延納した場合、完納するまでの間、[[所定の利子税を負担しなければならない]]。', //p39
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="給与所得者の税金の基礎"
                    :relatedProblems="['2024c3']"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="医療費控除"
                    :relatedProblems="['2024c4']"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
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
                    questionTitle="相続税の計算"
                    :relatedProblems="['2024a17', '2024b19', '2024c6']"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
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
                    questionTitle="個人が受け取る保険金・給付金等に対する税金の知識"
                    :relatedProblems="['2024c10']"
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
                    questionTitle="契約内容の変更に関する税務"
                    :relatedProblems="['2024c11']"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人住民税と法人事業税"
                    :relatedProblems="['2024c12']"
                    :contents="[
                        // rev: 2026-06-13 確認済み
                        '地域割と均等割 → 法人税割と均等割', //p217
                        '均等割額（標準税率）は、道府県民税および市町村民税のそれぞれについて、[[法人の規模等に応じて定められている]]。', //p218
                        '正しい',
                        '事業年度の所得金額 → 事業年度の収入金額', //p219
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="雑所得"
                    :relatedProblems="['2024c13']"
                    :contents="[
                        // rev: 2026-06-09 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '1回に支払われる金額のうち[[100万円以下の部分は10％、100万円を超える部分は20％]]が源泉徴収される。', //p15
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
                    questionTitle="青色申告制度"
                    :relatedProblems="['2024a3', '2024c15']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '青色申告者が備え付けるべき帳簿書類は、[[7年間（一定のものは5年間）]]保存しなければならない。', //p40
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
                    questionTitle="相続人"
                    :relatedProblems="['2024c18']"
                    :contents="[
                        // rev: 2026-06-14 確認済み
                        '正しい',
                        '正しい',
                        '胎児は相続において、すでに生まれたものとみなされて[[相続権が認められる]]（ただし、死産の場合は適用されない）。', //p93
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続財産の評価"
                    :relatedProblems="['2024b4', '2024c19']"
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
                    questionTitle="生命保険の契約内容の変更等に関する税務（個人契約）"
                    :relatedProblems="['2024c20']"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
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
                    questionTitle="法人税、法人税額の計算等"
                    :relatedProblems="['2024c22']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
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
                    questionTitle="養老保険を活用した「福利厚生プラン」"
                    :relatedProblems="['2024b24', '2024c24']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '中小企業退職金共済制度（中退共）等の他の退職金制度がある場合には、これらの制度と福利厚生プランとの合計額が退職慰労金規程の[[範囲内]]であるように設定する。', //p255
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="住宅借入金等特別控除（住宅ローン控除）"
                    :relatedProblems="['2024a2', '2024b42', '2024c25']"
                    :contents="[
                        // rev: 2026-06-21 確認済み
                        '税額控除',
                        '10',
                        '所得金額調整控除',
                        '6',
                        '控除率', // 問25〜29
                    ]"
                    :labels="[
                        'コ', //25
                        'エ', //26
                        'ウ', //27
                        'キ', //28
                        'カ', //29
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
                            questionTitle: '各種所得の損益の通算',
                            relatedProblems: ['2024c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-06-13 確認済み
                            questionTitle: '個人事業税の知識',
                            relatedProblems: ['2024c41'],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '相続放棄',
                            relatedProblems: ['2024a43', '2024c42'],
                            content: '',
                        }, //42
                        {
                            questionTitle: '法定相続分',
                            relatedProblems: ['2024c43'],
                            content: '',
                        }, //43
                        {
                            questionTitle: '相続税の非課税財産',
                            relatedProblems: ['2024a44', '2024b44', '2024c44'],
                            content: '',
                        }, //44
                        {
                            // rev: 2026-06-21 確認済み
                            questionTitle: '保証期間付終身年金の課税',
                            relatedProblems: ['2024c45'],
                            content: '一時所得 → 雑所得', //p174
                        }, //45
                        {
                            // rev: 2026-06-15 確認済み
                            questionTitle: '暦年課税の贈与税額計算の仕組み',
                            relatedProblems: ['2024a46', '2024b46', '2024c46'],
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '生命保険信託',
                            relatedProblems: ['2024a48', '2024c47'],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '同族会社の判定',
                            relatedProblems: ['2024c48'],
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

            <TestNavigationButtons previous-route="daigaku.zei2024b" next-route="daigaku.zei2023a" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
