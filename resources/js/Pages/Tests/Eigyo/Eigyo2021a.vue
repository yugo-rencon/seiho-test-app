<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険商品と営業";
const subject = "2021年度 フォームA";
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
                    questionTitle="年金改革-①"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '世代間扶養',
                        '18.30%',
                        '16,900円',
                        'マクロ経済スライド',
                        '2割', // 問１〜５
                    ]"
                    :labels="[
                        'ウ', //1
                        'オ', //2
                        'キ', //3
                        'ケ', //4
                        'ア', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="年金改革-②"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '2分の1',
                        '5年',
                        '10年',
                        '短時間労働者',
                        '産休期間中', //問６〜10
                    ]"
                    :labels="[
                        'ケ', //6
                        'ア', //7
                        'ウ', //8
                        'ク', //9
                        'キ', //10
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
                    questionTitle="女性の社会進出"
                    :contents="[
                        // rev: 2026-09-03 確認済み
                        '日本の女性の労働力率をみると、[[30〜39歳の年齢層において一旦低下している]]。これは、この年齢層においては、結婚して退職し、子育てに専念している女性が多いことに起因するものと考えられる。', //p12
                        '保障準備については、20〜30歳代女性の医療保障へのニーズ、40〜50歳代女性の[[老後保障]]へのニーズ、および50〜60歳代女性の[[介護保障]]ニーズが高いことがうかがえる。', //p12
                        '正しい',
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
                        '第1号被保険者や第3号被保険者 → 第1号被保険者（第3号被保険者は含まれない）', //p90
                        '正しい',
                        '基金を契約者、基金の加入員を被保険者および受取人 → 基金を契約者および受取人、基金の加入員を被保険者', //p91
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="販売チャネルの多様化"
                    :contents="[
                        '正しい',
                        '一社専属制が認められ、複数の生命保険会社の商品を取り扱いが可能', //p101
                        '諸外国ではあまり例のない → 諸外国で一般的', //p103
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="業界共通教育制度"
                    :contents="[
                        '正しい',
                        '研修時間は定められていない → 2日・12時間以上', //p124
                        'トータル・ライフ・コンサルタント → シニルライフ・コンサルタント', //p125
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="長い老後生活を見据えたライフ・プランニング"
                    :contents="[
                        // rev: 2026-09-03 確認済み
                        '生産年齢層の死亡率 → 乳児死亡率', //p20
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
                        '正しい',
                        '年齢階級別 → 所得段階別', //p30
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体年金保険の特別勘定特約"
                    :contents="[
                        // rev: 2026-09-04 確認済み
                        '正しい',
                        '契約者は各口およびその構成割合を決定することを通じて[[運用方針を実現することができる。]]', //p92
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="今後の顧客サービス"
                    :contents="[
                        '正しい',
                        '良いサービスか悪いサービス〜 ↔︎ 企業がどれだけのサービス〜', //p107
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人営業機構（直販）、代理店営業機構"
                    :contents="[
                        '正しい',
                        '正しい',
                        '乗合型 → 兼業型', //p145
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            questionTitle: '公的介護保険制度の運営主体',
                            content: '運営主体は各都道府県 → 各市区町村',
                        }, //31 p29
                        {
                            questionTitle: '第三分野市場',
                            content: '損害保険 ↔︎ 生命保険',
                        }, //32 p34
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '個人情報の保護に関する法律',
                            content: '正しい',
                        }, //33
                        {
                            questionTitle: '危険選択の方法',
                            content: '認定生命保険士 → 生命保険面接士',
                        }, //34 p52
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '医療保障',
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'ユニバーサル保険',
                            content: '正しい',
                        }, //36
                        {
                            questionTitle: '生保財形の特徴',
                            content: '払込保険料累計額の3倍 → 5倍',
                        }, //37 p96
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '一時払退職後終身保険',
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '法人顧客システム',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '営業職員の給与体系',
                            content: '地域別最低賃金が適用されない → 適用される',
                        }, //40 p136
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '厚生年金保険の保険料',
                            label: 'オ',
                            content: '',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '公的介護保険の保険料',
                            label: 'オ',
                            content: '',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '個人保険商品',
                            label: 'ウ',
                            content: '利差配当',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '変額保険',
                            label: 'エ',
                            content: '保険料',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生命表',
                            label: 'ア',
                            content: '経験死亡率',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '総合福祉団体定期保険',
                            label: 'イ',
                            content: '企業等',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '団体信用生命保険',
                            label: 'イ',
                            content: '賦払償還債務',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '医療保障保険（団体型）',
                            label: 'エ',
                            content: '自己負担の一部を補填する',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '営業職員の適格性要素',
                            label: 'オ',
                            content: '',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '支社の配置',
                            label: 'ウ',
                            content: '分割',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="eigyo2022c" next-route="eigyo2021b" />
        </section>
    </SeihoTestLayout>
</template>
