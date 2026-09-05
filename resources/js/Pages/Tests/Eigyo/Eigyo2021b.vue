<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険商品と営業";
const subject = "2021年度 フォームB";
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
                        '住民票',
                        '特定個人情報',
                        '特定保険契約', // 問１〜５
                    ]"
                    :labels="[
                        'イ', //1
                        'カ', //2
                        'コ', //3
                        'オ', //4
                        'エ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者保護とコンプライアンス-②"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '7年間',
                        '商法',
                        '共済契約',
                        '告知',
                        '遺言', //問６〜10
                    ]"
                    :labels="[
                        'ウ', //6
                        'オ', //7
                        'キ', //8
                        'ク', //9
                        'ア', //10
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
                    questionTitle="貯蓄の動向"
                    :contents="[
                        '年間収入を下回っており → 年間収入を上回り', //p15
                        '正しい',
                        '株式・投資信託 → 預貯金', //p16
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険商品の構造"
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
                    questionTitle="医療保障等を主たる目的とした保険（特約）"
                    :contents="[
                        // rev: 2026-09-03 確認済み
                        '正しい',
                        '一時所得扱い → 非課税扱い', //p61
                        '余命１年 → 余命６ヶ月<br>1000万円を上限 → 3000万円を上限', //p61
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険"
                    :contents="[
                        '保険金は支払われる → 支払われない', //p85
                        'ヒューマン・ヴァリュー特約 → 災害総合保障特約', //p83-84
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金の保険料"
                    :contents="[
                        '正しい',
                        '正しい',
                        '全額加入者個人が負担 → 労使折半により負担', //p25
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
                    questionTitle="戦後の商品政策の変遷"
                    :contents="[
                        // rev: 2026-09-05 確認済み]
                        'デビット・システム（[[一定の地域に一名の営業職員を配置し、その地域内での保険販売・保全活動にあたらせる制度]]）', //p66
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険仲立人"
                    :contents="[
                        // rev: 2026-09-06 確認済み
                        '保険契約の締結の代理または媒介 → 保険契約の締結の媒介', //p103
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="営業職員マネジメント"
                    :contents="[
                        '正しい',
                        '正しい',
                        '保険仲立人 → 生命保険募集人', //p131
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '介護保険の保険料',
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-09-05 確認済み
                            questionTitle: '第三分野市場',
                            content: '保険の第三分野とは、[[生命保険（第一分野）]]・[[損害保険（第二分野）]]のいずれにも属さないとされる疾病・傷害分野の保険であり、医療保険・介護保険・傷害保険などがこれに該当する。', //p34
                        }, //32
                        {
                            // rev: 2026-09-05 確認済み
                            questionTitle: '個人保険商品の構造',
                            content: '被保険者の死亡後は、[[年金の支払は行われない]]。', //p47
                        }, //33
                        {
                            // rev: 2026-09-06 確認済み
                            questionTitle: '危険選択の方法',
                            content: '認定生命保険士 → 生命保険面接士', //p52
                        }, //34
                        {
                            questionTitle: '契約者単位の通算割引',
                            content: '保険料総額 → 保険金額',
                        }, //35 p78
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '財形制度',
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-09-06 確認済み
                            questionTitle: '変額保険販売資格制度',
                            content: '応用課程 → 専門課程', //p126
                        }, //37
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '一時払退職後終身保険',
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '機関長のタイプ',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '企業保険の営業',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '代理・代行',
                            label: 'ア',
                            content: '保険業法',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '保険料率の改定',
                            label: 'エ',
                            content: '引き下げ',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '個人保険商品',
                            label: 'ウ',
                            content: '利差配当',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '単独運用特別勘定',
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生命表',
                            label: 'ア',
                            content: '経験死亡率',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生保財形の特徴',
                            label: 'オ',
                            content: '',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '顧客サービスの向上',
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
                            questionTitle: '営業職員の給与体系',
                            label: 'イ',
                            content: '地域',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '営業職員の教育',
                            label: 'オ',
                            content: '',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="eigyo2021a" next-route="eigyo2021c" />
        </section>
    </SeihoTestLayout>
</template>
