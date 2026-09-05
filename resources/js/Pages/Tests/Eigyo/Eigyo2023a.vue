<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険商品と営業";
const subject = "2023年度 フォームA";
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
                    questionTitle="消費者保護とコンプライアンス-①"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '規制緩和',
                        '民法',
                        '元本割れリスク',
                        '投資性',
                        '特定保険契約', // 問１〜５
                    ]"
                    :labels="[
                        'イ', //1
                        'コ', //2
                        'ア', //3
                        'キ', //4
                        'ク', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者保護とコンプライアンス-②"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '商法',
                        '共済契約',
                        '傷害疾病保険契約',
                        '遺言',
                        '顧客重視・法令等の遵守', //問６〜10
                    ]"
                    :labels="[
                        'ク', //6
                        'ウ', //7
                        'カ', //8
                        'ア', //9
                        'オ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="顧客サービスの向上と多様化-①"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '継続的',
                        'マーケティング',
                        '転換制度',
                        'エージェント',
                        '不可分化', //問11〜15
                    ]"
                    :labels="[
                        'ウ', //11
                        'コ', //12
                        'キ', //13
                        'イ', //14
                        'ケ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="顧客サービスの向上と多様化-②"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        'face to face',
                        '情報通信機器',
                        '囲い込み',
                        'CS（Customer Satisfaction）',
                        '選択', //問16〜20
                    ]"
                    :labels="[
                        'ケ', //16
                        'エ', //17
                        'ア', //18
                        'ク', //19
                        'オ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="医療保障等を主たる目的とした保険（特約）"
                    :contents="[
                        // rev: 2026-09-03 確認済み
                        '2000年に初めて開発・販売 → 1985年には発売されている', //p60
                        '正しい',
                        '2000万円を上限とし、特約保険料も割安 → 3000万円を上限とし、特約保険料は不要（無料）', //p61
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険"
                    :contents="[
                        // rev: 2026-09-05 確認済み
                        '正しい',
                        '変動する部分は、変動保険金（[[毎月変動]]）、満期保険金（[[満期時に確定]]）のほか積立金（[[毎日変動]]）や、解約返戻金（[[毎日変動]]）がある。', //p64
                        '契約時に定めた基本保険金額、特約保険金額は[[変動しない]]。', //p64
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険"
                    :contents="[
                        // rev: 2026-09-05 確認済み
                        '正しい',
                        '1年以上 → 2年以上<br>前後6か月以内 → 前後1年以内', //p97
                        '健康保険組合連合会 → 地方公共団体', //p97
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険代理店"
                    :contents="[
                        // rev: 2026-09-05 確認済み
                        '一定の条件を満たす保険代理店においては、[[一社専属制の例外が認められ、複数の生命保険会社の商品を取り扱うことができる]]。', //p101
                        '正しい',
                        '2016年（平成28年）の改正保険業法において、生命保険募集人に対し募集の実態に応じた体制整備を義務付ける規制が導入され、保険代理店についても、複数の生命保険会社の商品の取扱いの有無など、[[業務の特性や規模に応じて]]、体制整備が求められることとなった。', //p101
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="業界共通教育制度"
                    :contents="[
                        // rev: 2026-09-05 確認済み
                        '専門課程 → 応用課程', //p125
                        'シニア・ライフ・コンサルタントの称号を与えられるのは応用課程試験の合格者である。また応用課程試験の受験要件ではない。', //p126
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="長い老後生活を見据えたライフ・プランニング"
                    :contents="[
                        // rev: 2026-09-03 確認済み
                        '生活習慣病罹患率 → 乳児死亡率', //p20
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金の保険料"
                    :contents="[
                        // rev: 2026-09-06 確認済み
                        '正しい',
                        '第3号被保険者 → 第1号被保険者', //p25
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険商品の構造"
                    :contents="[
                        // rev: 2026-09-05 確認済み
                        '正しい',
                        '正しい',
                        '以前は国内生保の大部分を占めていた「相互会社」形態の会社では、有配当保険しか取り扱いができず、「株式会社」形態の会社のみが無配当保険を取り扱っていたが、保険業法改正によって[[相互会社でも取り扱いが可能となった]]。', //p51
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料払込負担の軽減"
                    :contents="[
                        // rev: 2026-09-06 確認済み
                        '終身保険等の[[主契約に充当する方法]]に加え、定期保険特約部分に充当する方法も開発され、[[主契約と定期保険特約の両方に充当することも可能]]とした。', //p71-72
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険仲立人"
                    :contents="[
                        // rev: 2026-09-06 確認済み
                        '正しい',
                        '正しい',
                        '2013年（平成25年）の金融審議会の報告書によると、保険契約者保護の観点から問題のないものについて保険仲立人に係る[[規制を緩和]]することが適当であるとされている。それを受け、2014年（平成26年）の保険業法の改正で、[[保証金の額の引き下げなど一部の規制が緩和された]]。', //p103
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-09-06 確認済み
                            questionTitle: '人の一生',
                            content: '節目ごとに区切られた[[ライフステージ]]がつながって形成されているのが、[[ライフサイクル]]である。', //p20
                        }, //31
                        {
                            // rev: 2026-09-05 確認済み
                            questionTitle: '第三分野市場',
                            content: '2000年（平成12年）の[[日米保険協議]]の決着により2001年（平成13年）１月には、[[子会社による参入]]が、続いて７月には、[[本体による参入]]が解禁となった。', //p35
                        }, //32
                        {
                            // rev: 2026-09-06 確認済み
                            questionTitle: '生命年金',
                            content: '生命年金とは、確定年金とは異なり、[[被保険者の生存中にかぎり]]、周期的に一定の金額の支払をするものをいう。', //p47
                        }, //33
                        {
                            // rev: 2026-09-06 確認済み
                            questionTitle: '危険選択の方法',
                            content: '生命保険支払専門士 → 生命保険面接士', //p52
                        }, //34
                        {
                            questionTitle: '契約者単位の通算割引',
                            content: '払込保険料を割り引く方式のみ → 給付金として割り戻す方式もある',
                        }, //35 p78
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '特別勘定',
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-09-03 確認済み
                            questionTitle: '財形貯蓄制度',
                            content: '財形貯蓄制度には、勤労者財産形成貯蓄契約（一般財形）、勤労者財産形成年金貯蓄契約（財形年金）、[[勤労者財産形成住宅貯蓄契約（財形住宅）]]の３種類がある。', //p94
                        }, //37
                        {
                            questionTitle: 'インターネット通販',
                            content: '生保会社の出現に至ってない → 契約の成立まで完了できる生保会社もある',
                        }, //38 p104
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '営業職員の育成体系',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '企業保険の営業',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '種類別貯蓄高',
                            label: 'ウ',
                            content: '通貨性預貯金',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '遺族年金',
                            label: 'ア',
                            content: '３分の１',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '公的介護保険制度の概要',
                            label: 'ウ',
                            content: '介護認定審査会',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '個人保険商品の配当',
                            label: 'ア',
                            content: '資産運用成果',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '月払保険の普及',
                            label: 'オ',
                            content: '',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '総合福祉団体定期保険',
                            label: 'イ',
                            content: '企業等',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '国民年金基金制度',
                            label: 'イ',
                            content: '厚生労働大臣',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '営業職員の登録',
                            label: 'オ',
                            content: '',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '営業職員の給与体系',
                            label: 'エ',
                            content: '保障額',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '支社の配置',
                            label: 'オ',
                            content: '',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="eigyo2024c" next-route="eigyo2023b" />
        </section>
    </SeihoTestLayout>
</template>
