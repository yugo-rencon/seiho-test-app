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
                    :contents="[
                        '正しい',
                        '必ず主契約と同じ → 主契約より短い場合もある', //p49
                        '相互会社を除き → 相互会社でも販売可能', //p51
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体年金保険"
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
                    :contents="[
                        '満期保険金額 → 死亡保険金額', //p63
                        '変動保険金（毎日変動） → 変動保険金（毎月変動）<br>積立金（毎月変動） → 積立金（毎日変動）', //p64
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="通信販売とインターネット通販"
                    :contents="[
                        'モラルリスク等が問題となりにくい → 問題となりやすい<br>制限しているケースは少ない → 多い', //p104
                        '契約の成立まで完了できる生保会社はない → 契約の成立まで完了できる生保会社もある', //p104
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度の動向"
                    :contents="[
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
                    :contents="[
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
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-09-05 確認済み
                            questionTitle: '第三分野市場',
                            content: '保険の第三分野とは、[[生命保険（第一分野）]]・[[損害保険（第二分野）]]のいずれにも属さないとされる疾病・傷害分野の保険であり、医療保険・介護保険・傷害保険などがこれに該当する。', //p34
                        }, //32
                        {
                            questionTitle: '消費者契約法',
                            content: '契約を無効とすることができる → 契約を取り消すことができる',
                        }, //33 p37
                        {
                            questionTitle: '危険選択の方法',
                            content: '認定生命保険士 → 生命保険面接士',
                        }, //34 p52
                        {
                            questionTitle: 'リビング・ニーズ特約',
                            content: '贈与税が課税 → 非課税',
                        }, //35 p61-62
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '付帯サービス',
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-09-04 確認済み
                            questionTitle: '特別勘定特約',
                            content: '現在のところ、[[新企業年金保険]]、確定給付企業年金保険、国民年金基金保険、[[団体生存保険]]に付加する特別勘定特約が販売されている。',//p91-92
                        }, //37
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '一時払退職後終身保険',
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '営業職員の育成体系',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生命保険大学課程',
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
                            questionTitle: '医療保障',
                            label: 'イ',
                            content: '三大疾病',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '個人保険商品',
                            label: 'ウ',
                            content: '利差配当',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '財形貯蓄制度の種類',
                            label: 'イ',
                            content: '55歳',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生命表',
                            label: 'ア',
                            content: '経験死亡率',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '販売チャネル',
                            label: 'オ',
                            content: '',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '変額保険販売資格要件',
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '医療保障保険（団体型）',
                            label: 'エ',
                            content: '自己負担の一部を補填する',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '営業職員の退職金',
                            label: 'エ',
                            content: '終身',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '代理店',
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
