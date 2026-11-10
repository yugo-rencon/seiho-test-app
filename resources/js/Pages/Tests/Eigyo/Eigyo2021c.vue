<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険商品と営業";
const subject = "2021年度 フォームC";
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
                    questionTitle="生命保険マーケティング-①"
                    :relatedProblems="['2021c1']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '継続的',
                        'マーケティング',
                        '転換制度',
                        '必要な情報の提供者',
                        '不可分化', // 問１〜５
                    ]"
                    :labels="[
                        'ウ', //1
                        'コ', //2
                        'カ', //3
                        'キ', //4
                        'ク', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険マーケティング-②"
                    :relatedProblems="['2021c6']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        'face to face',
                        '情報通信機器',
                        '囲い込み',
                        'CS（Customer Satisfaction）',
                        '金融改革', //問６〜10
                    ]"
                    :labels="[
                        'ア', //6
                        'キ', //7
                        'ウ', //8
                        'ケ', //9
                        'オ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="銀行窓販-①"
                    :relatedProblems="['2021a11', '2021b11', '2021c11']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '信用生命保険',
                        '競争条件の公平性',
                        '流出防止',
                        '抱き合わせ販売',
                        '商品情報', //問11〜15
                    ]"
                    :labels="[
                        'キ', //11
                        'エ', //12
                        'コ', //13
                        'ク', //14
                        'カ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="銀行窓販-②"
                    :relatedProblems="['2021a16', '2021b16', '2021c16']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '個人年金保険（定額・変額）',
                        '事前説明義務',
                        '残債務リスク',
                        '相談窓口',
                        '全面解禁', //問16〜20
                    ]"
                    :labels="[
                        'カ', //16
                        'ク', //17
                        'キ', //18
                        'コ', //19
                        'ケ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金の給付"
                    :relatedProblems="['2021c21']"
                    :contents="[
                        // rev: 2026-09-04 確認済み
                        '25年以上 → 10年以上', //p26
                        '正しい',
                        '老齢厚生年金相当額の3分の2 → 4分の3', //p26
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険商品の構造"
                    :relatedProblems="['2021a22', '2021b22', '2021b33', '2021c22']"
                    :contents="[
                        // rev: 2026-09-05 確認済み
                        '正しい',
                        '特約の保険期間は、主契約の保険期間と[[同じ]]場合と、主契約より[[短い]]場合がある。', //p49
                        '以前は国内生保の大部分を占めていた「相互会社」形態の会社では、有配当保険しか取り扱いができず、「株式会社」形態の会社のみが無配当保険を取り扱っていたが、保険業法改正によって[[相互会社でも取り扱いが可能となった]]。', //p51
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体年金保険"
                    :relatedProblems="['2021a23', '2021b23', '2021c23']"
                    :contents="[
                        // rev: 2026-09-04 確認済み
                        '国民年金基金制度は、自営業者等の国民年金の[[第１号被保険者]]が、国民年金に上乗せすることにより、老後の所得保障の充実を図ることを目的とした制度である。', //p90
                        '正しい',
                        '基金を契約者、基金の加入員を被保険者および受取人 → 基金を契約者および受取人、基金の加入員を被保険者', //p91
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険"
                    :relatedProblems="['2021a44', '2021c24']"
                    :contents="[
                        // rev: 2026-09-05 確認済み
                        '満期保険金額 → 死亡保険金額', //p63
                        '変動する部分は、変動保険金（[[毎月変動]]）、満期保険金（満期時に確定）のほか積立金（[[毎日変動]]）や、解約返戻金（毎日変動）がある。', //p64
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="通信販売とインターネット通販"
                    :relatedProblems="['2021c25']"
                    :contents="[
                        // rev: 2026-09-05 確認済み
                        '通信販売は営業職員・募集代理店による対面販売との比較において顧客との接点が非常に限られているため、[[告知義務や契約始期、モラルリスク等が問題となりやすく]]、取扱保険商品、加入保険金額を制限しているケースが[[多い]]。', //p104
                        'パソコンやスマートフォンで資料請求や申込ができるだけではなく、[[契約の成立までも完了できる生保会社もある]]。', //p104
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度の動向"
                    :relatedProblems="['2021c26']"
                    :contents="[
                        // rev: 2026-09-06 確認済み
                        '退職した場合（退職給付） → 老齢になった場合（老齢給付）', //p25
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的介護保険制度の概要"
                    :relatedProblems="['2021a27', '2021b27', '2021c27']"
                    :contents="[
                        // rev: 2026-09-05 確認済み
                        '正しい',
                        '年齢階級別 → 所得段階別', //p30
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険商品の特約"
                    :relatedProblems="['2021c28']"
                    :contents="[
                        // rev: 2026-09-04 確認済み
                        '正しい',
                        '「特別条件特約」は、[[健康状態が一定の危険の範囲を超えているが危険の度合いに応じて]]「保険料の割増」などの特別の条件を付けて引き受けるなどの取扱を定めたものである。', //p49
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料払込負担の軽減"
                    :relatedProblems="['2021c29']"
                    :contents="[
                        // rev: 2026-09-06 確認済み
                        '前納保険料 → 一時払保険料', //p71
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険"
                    :relatedProblems="['2021c30']"
                    :contents="[
                        // rev: 2026-09-03 確認済み
                        '正しい',
                        '正しい',
                        '団体信用生命保険 → 消費者信用団体生命保険', //p87
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '豊かな老後生活への備え',
                            relatedProblems: ['2021c31'],
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-09-05 確認済み
                            questionTitle: '第三分野市場',
                            relatedProblems: ['2021a32', '2021b32', '2021c32'],
                            content: '保険の第三分野とは、[[生命保険（第一分野）]]・[[損害保険（第二分野）]]のいずれにも属さないとされる疾病・傷害分野の保険であり、医療保険・介護保険・傷害保険などがこれに該当する。', //p34
                        }, //32
                        {
                            // rev: 2026-09-06 確認済み
                            questionTitle: '消費者契約法',
                            relatedProblems: ['2021c33'],
                            content: '「消費者契約法」のポイントは、勧誘時に事業者が不適切な勧誘方法により消費者を「誤認」させたり、「困惑」させたりした場合、[[消費者は契約を取り消すことができる]]とした点である。', //p37
                        }, //33
                        {
                            // rev: 2026-09-06 確認済み
                            questionTitle: '危険選択の方法',
                            relatedProblems: ['2021a34', '2021b34', '2021c34'],
                            content: '認定生命保険士 → 生命保険面接士', //p52
                        }, //34
                        {
                            // rev: 2026-09-06 確認済み
                            questionTitle: 'リビング・ニーズ特約',
                            relatedProblems: ['2021c35'],
                            content: '被保険者が受取人となる場合、[[非課税扱い]]になる。', //p62
                        }, //35
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '付帯サービス',
                            relatedProblems: ['2021c36'],
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-09-04 確認済み
                            questionTitle: '特別勘定特約',
                            relatedProblems: ['2021c37'],
                            content: '現在のところ、[[新企業年金保険]]、確定給付企業年金保険、国民年金基金保険、[[団体生存保険]]に付加する特別勘定特約が販売されている。',//p91-92
                        }, //37
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '一時払退職後終身保険',
                            relatedProblems: ['2021a38', '2021b38', '2021c38'],
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '営業職員の育成体系',
                            relatedProblems: ['2021c39'],
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生命保険大学課程',
                            relatedProblems: ['2021c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '種類別貯蓄高',
                            relatedProblems: ['2021c41'],
                            label: 'ウ',
                            content: '通貨性預貯金',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '医療保障',
                            relatedProblems: ['2021a35', '2021c42'],
                            label: 'イ',
                            content: '三大疾病',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '個人保険商品',
                            relatedProblems: ['2021a43', '2021b43', '2021c43'],
                            label: 'ウ',
                            content: '利差配当',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '財形貯蓄制度の種類',
                            relatedProblems: ['2021c44'],
                            label: 'イ',
                            content: '55歳',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生命表',
                            relatedProblems: ['2021a45', '2021b45', '2021c45'],
                            label: 'ア',
                            content: '経験死亡率',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '販売チャネル',
                            relatedProblems: ['2021c46'],
                            label: 'オ',
                            content: '',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '変額保険販売資格要件',
                            relatedProblems: ['2021c47'],
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '医療保障保険（団体型）',
                            relatedProblems: ['2021a48', '2021b48', '2021c48'],
                            label: 'エ',
                            content: '自己負担の一部を補填する',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '営業職員の退職金',
                            relatedProblems: ['2021c49'],
                            label: 'エ',
                            content: '終身',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '代理店',
                            relatedProblems: ['2021c50'],
                            label: 'ア',
                            content: '募集代理店',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="eigyo2021b" next-route="eigyo2020a" />
        </section>
    </SeihoTestLayout>
</template>
