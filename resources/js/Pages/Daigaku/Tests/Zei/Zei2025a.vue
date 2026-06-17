<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税・相続";
const subject = "2025年度 フォームA";
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
                        // rev: 2026-06-09 確認済み
                        '金銭で受領せずに商品等の現物を支給される、いわゆる現物給与も給与所得として[[課税対象となる]]。', //p10
                        '山林所得または譲渡所得に該当するものは[[除く]]。', //p11
                        '正しい',
                        '配当所得 → 一時所得', //p12
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="雑所得"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-09 確認済み
                        '講演料や放送謝金（[[事業と認められるものを除く]]）', //p14
                        '正しい',
                        '中小企業退職金共済法に基づき分割払の方法で支給される分割退職金は、公的年金等の収入金額に[[該当する]]。', //p14
                        '25% → 10%', //p15
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="事業税"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-13 確認済み
                        '市区町村 → 都道府県', //p47,p219
                        '個人事業税は、原則として所得税における所得の計算方法に準じて算出した前年中の個人の「事業所得」および「不動産所得」（それぞれ必要経費を控除後）の合計額に対して、[[事業の種類ごとに定められている税率]]を乗じた額となる。', //p47
                        '個人事業税の申告がある場合であっても、前年分の所得税についての確定申告書を提出した場合は、[[個人事業税の申告がされたものとみなされる]]。', //p48
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金等についての税金の知識"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-13 確認済み
                        '公的年金の中には、厚生年金制度・国民年金制度における遺族年金等のように[[非課税所得とみなされ、課税されないものがある]]。', //p86
                        '厚生労働省 → 日本年金機構', //p86
                        '正しい',
                        '所得税が[[非課税となるわけではない]]。', //p87
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続人"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-14 確認済み
                        '正しい',
                        '[[他へ養子に行った子]]、嫁に行った娘も[[相続人となる]]（特別養子を除く）。', //p93
                        '胎児は相続において、すでに生まれたものとみなされて[[相続権が認められる]]（ただし、死産の場合は適用されない）。', //p93
                        '廃除の対象となる相続人は、遺留分を有する推定相続人に限られるので、[[遺留分を有しない兄弟姉妹は廃除の対象にならない]]。', //p94
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の各人の課税価格の計算"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-14 確認済み
                        '相続税の課税価格は、[[財産を取得した者の住所が日本国内にあるかないかにより異なる]]。', //p121
                        '借入金や未払金等も[[認められている]]。', //p122
                        '香典返礼費用、初七日、その他法事等のための費用は、[[葬式費用に含めない]]。', //p123
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-14 確認済み
                        '法律上の根拠がなくても経済的価値が認められているもの、たとえば営業権のようなものも[[含まれる]]。', //p143
                        '正しい',
                        '個人は、法人からの贈与財産に対して、[[贈与税ではなく、給与または一時所得として所得税・住民税が課税される]]。', //p145
                        '1年間に贈与を受けた財産の課税価格が110万円以下であれば、贈与税は課税されず、[[贈与税の申告書を提出する必要もない]]。', //p147
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="こども保険（学資保険）に関する税務"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-06-18 確認済み
                        '雑所得 → 一時所得', //p165
                        '正しい',
                        '保険料払込免除後の保険料分は、[[必要経費とならない]]。', //p165
                        '一時所得 → 雑所得', //p166
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人向け保険商品の課税関係"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険を活用した相続対策"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税法の損金の特別規定"
                    :relatedProblems="[]"
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
                    questionTitle="福利厚生プラン"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="各種所得と損益通算"
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
                    questionTitle="青色申告制度"
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
                    questionTitle="住民税の主な所得控除"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定申告の訂正と税務調査・処分"
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
                    questionTitle="遺贈・遺言と遺留分"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続の承認と放棄、相続分"
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
                    questionTitle="みなし相続財産"
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
                    questionTitle="相続税の申告と納税"
                    :relatedProblems="[]"
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
                    questionTitle="相続時精算課税制度"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税"
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
                    questionTitle="法人税等の申告と納付"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院給付金等に関する税務"
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
                    questionTitle="予定納税"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問25〜29
                    ]"
                    :labels="[
                        'ケ', //25
                        'イ', //26
                        'エ', //27
                        'オ', //28
                        'ク', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="中高年者に関する税金の知識"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問30〜34
                    ]"
                    :labels="[
                        'ア', //30
                        'オ', //31
                        'ケ', //32
                        'ウ', //33
                        'キ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="法人等に課税される税金の計算"
                    :relatedProblems="[]"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問35〜39
                    ]"
                    :labels="[
                        'ケ', //35
                        'ア', //36
                        'ウ', //37
                        'キ', //38
                        'カ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問40〜49
                        {
                            questionTitle: '住宅借入金等特別控除（住宅ローン控除）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '配当所得に対する課税の特例',
                            relatedProblems: [],
                            content: '',
                        }, //41
                        {
                            questionTitle: '特別の損失または支出に対する配慮に基づく所得控除に関する知識',
                            relatedProblems: [],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '特別の寄与',
                            relatedProblems: [],
                            content: '',
                        }, //43
                        {
                            questionTitle: '相続税の納税',
                            relatedProblems: [],
                            content: '正しい',
                        }, //44
                        {
                            // rev: 2026-06-14 確認済み
                            questionTitle: '結婚・子育て資金の一括贈与に係る贈与税の非課税措置',
                            relatedProblems: [],
                            content: '結婚・子育て資金にあてるために、父母や祖父母等の直系尊属が金銭を拠出し、信託銀行等の所定の金融機関等に信託等をした場合に、[[信託受益権の価額または拠出された金銭等の額のうち別途定める金額を非課税とする]]。',//p154
                        }, //45
                        {
                            questionTitle: '保証期間付終身年金の課税',
                            relatedProblems: [],
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '契約内容などの変更に関する税務',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '法人税の受取配当等の益金不算入',
                            relatedProblems: [],
                            content: '',
                        }, //48
                        {
                            questionTitle: '法人向け保険商品の課税',
                            relatedProblems: [],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons next-route="daigaku.zei2025b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
