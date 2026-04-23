<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "ファイナンシャルプランニングとコンプライアンス";
const subject = "2021年度 フォームA";
const isDraft = false;
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
                    questionTitle="リスクマネジメント"
                    :relatedProblems="[]"
                    :contents="[
                        '経済的損失と心理的な重圧の両者を防ぐプランニングをリスクマネジメントという → 経済的損失を防ぐプランニングをリスクマネジメントという', //p14
                        '相互に関係するものではない → 表裏一体の関係にある', //p14
                        '正しい',
                        '生命保険商品でしか対応できない → 生命保険商品だけではなく、さまざまな金融商品で対応可能', //p17
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="資金ニーズと保険種類"
                    :relatedProblems="[]"
                    :contents="[
                        '老後の生活資金ニーズに比較的合致している商品', //p19
                        '教育・結婚資金ニーズ、住宅資金ニーズには合致しない', //p19
                        '教育・結婚資金ニーズ、住宅資金ニーズには合致しない', //p19
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローンの返済方法"
                    :relatedProblems="[]"
                    :contents="[
                        '返済開始当初は元金返済部分が多い → 返済開始当初は利息部分が多い', //p35
                        '返済額の利息部分が一定・返済額が増えてくる → 返済額が一定', //p35
                        '正しい',
                        'アドオン方式 → リボルビング（回転信用）方式', //p36
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="住宅取得資金計画"
                    :relatedProblems="[]"
                    :contents="[
                        '明確にする必要はない → 明確にする必要がある（時代によって価値観は変わるから）', //p40
                        '正しい',
                        '各金融機関でほとんど差がない → ライフプランの多様化に伴い、そのニーズに対応した特徴ある独自のローンが開発されている', //p42
                        '国内外 → 国内', //p50
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="住宅ローンの知識"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '5年以上継続して加入 → 1年以上継続して加入<br>残高が30万円以上 → 残高が50万円以上', //p41
                        '3通り → 2通り（保険型は含まれない）', //p44
                        '利息軽減型は、返済額軽減型の方が大きい → 期間短縮型（中抜き方式）の方が大きい', //p46
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品のリスク"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '常にひとつの商品の長所と短所で考えることが重要 → ポートフォリオの視点で考えることが重要', //p67
                        '潜在化 → 顕在化', //p66
                        '資産運用における集中投資 → 資産運用における分散投資', //p68
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の資金準備"
                    :relatedProblems="[]"
                    :contents="[
                        '40歳から50歳代前半の場合 → 退職を間近に控えている場合', //p73
                        '正しい',
                        '必要な年数は退職時の平均余命 → 必要期間を見積もるのは困難', //p73
                        '年金額が将来増えることが期待できる → 期待できない', //p74
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続対策"
                    :relatedProblems="[]"
                    :contents="[
                        '財産を（遺産）を被相続人が取得した時の価額で評価を行う → 死亡時の時価で評価を行う', //p89
                        '8割 → 3割', //p89
                        '正しい',
                        '相続開始前5年以内 → 相続開始前7年以内', //p94
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険を活用した相続対策"
                    :relatedProblems="[]"
                    :contents="[
                        '負担軽減対策には生命保険はふさわしくない → すべての対策に生命保険を活用することができる', //p98
                        '法定相続分相当額以上 → 遺留分相当額以上', //p99
                        '代襲相続 → 代襲財産', //p100
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="2016年（平成28年）5月施行の保険業法の主な改正内容"
                    :relatedProblems="[]"
                    :contents="[
                        '注意喚起情報 → 契約概要', //p116
                        '契約後に意向確認 → 契約前に意向確認', //p117
                        '正しい',
                        'アンケートで事前に把握する方法は認められていない → 認められている', //p117
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）"
                    :relatedProblems="[]"
                    :contents="[
                        '実際の取引担当者については本人特定事項の確認が必要ない → 法人と実際の取引担当者双方で必要', //p161
                        '正しい',
                        '罰則までは規定されていない → 1年以下の拘禁系もしくは100万円以下の罰金が課される', //p162
                        '拒むことはできない → 拒むことができる免責規定を設けている', //p162
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人情報の保護に関する法律（個人情報保護法）"
                    :relatedProblems="[]"
                    :contents="[
                        '生存する個人に関する情報とはならない → 生存する個人に関する情報となる', //p164
                        'お客さまの管理のために利用することが認められている → 法令で限定的に定められている利用範囲を超えたマイナンバーの収集・利用はしてはいけない', //p169
                        '正しい',
                        'どのような場合であっても本人に通知または公表しなければならない → 利用目的を公表することで本人等の権利を害する場合などは通知や公表は不要', //p168
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="ライフプランニングの基礎"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '額面給与から税金や社会保険料を差し引く前の額 → 差し引いた後の額<br>給与天引きの社内積立や生命保険料等を差し引いた後の額 → 差し引く前の手取額', //p8
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="キャッシュフロー表の収支項目の定義"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '金額が正確に判明する支出 - 現在の支出合計 → 現在の支出合計 - 金額が正確に判明する支出', //p9
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="ライフステージ別のプランニング（40歳代既婚者）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '40歳以上55歳未満の第3号被保険者 → 40歳以上65歳未満の第2号被保険者<br>40歳代は第3号被保険者 → 40歳代は第2号被保険者', //p28
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローンの種類"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        'フリーローンの方が金利は低い → 目的別ローンの方が金利は低い', //p34
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="住宅取得資金計画"
                    :relatedProblems="[]"
                    :contents="[
                        '購入金額の5割以上 → 購入金額の2割以上', //p49
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="ポートフォリオ"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '総資産ポートフォリオ → マネーポートフォリオ', //p66
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後生活設計の考え方"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '雇用確保措置で定められた60歳定年を前提としたコンサルティング → 雇用確保措置で60歳定年という概念がなくなり、個々の老後生活設計に応じたコンサルティング', //p70
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の資金運用"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '収益性が原則 → 安全性が原則<br>若い間の資金運用は流動性 → 若い間の資金運用は収益性<br>リスクマネジメントを考慮するよりも収益性・安全性に流動性も加えたマネージメントを考慮 → 収益性・安全性に流動性も加えたマネージメントだけでなくリスクマネジメントも考慮', //p79
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
                        '限度額2000万円 → 2500万円<br>一律10% → 一律20%', //p90
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="生前贈与を利用した生命保険活用の留意点"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '贈与者が管理 → 受贈者が管理', //p103
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の経営破綻時の契約者保護"
                    :relatedProblems="[]"
                    :contents="[
                        '原則70%まで → 原則90%まで', //p123
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険法における保険募集に関連する規定"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '告知義務違反を理由に契約を解除することができない', //p160
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="マネープランニングにおける資金運用の3要素"
                    :relatedProblems="[]"
                    :contents="[
                        '中途解約',
                        '元本割れ',
                        '貯蓄預金',
                        '外貨預金',
                        '満期時一括受取型', // 問25〜29
                    ]"
                    :labels="[
                        'オ', //25
                        'イ', //26
                        'カ', //27
                        'ケ', //28
                        'ウ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="老後生活設計の医療費等"
                    :relatedProblems="[]"
                    :contents="[
                        '14',
                        '20',
                        '2',
                        '全額',
                        '低い', // 問30〜34
                    ]"
                    :labels="[
                        'エ', //30
                        'オ', //31
                        'ア', //32
                        'ク', //33
                        'コ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="保険募集におけるコンプライアンス"
                    :relatedProblems="[]"
                    :contents="[
                        '法令等',
                        '適合性',
                        '重要な事項',
                        '低い',
                        '20', // 問35〜39
                    ]"
                    :labels="[
                        'ウ', //35
                        'ア', //36
                        'ク', //37
                        'コ', //38
                        'オ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問40〜49
                        {
                            questionTitle: '外貨建金融商品の利用',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: 'キャッシュフロー',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: 'キャッシュフロー表の数値の変動要素',
                            relatedProblems: [],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '家計の収支バランスが崩れるリスク',
                            relatedProblems: [],
                            content: '3つに分類 → 2つに分類（火事や災害などの突発的な事態が発生するリスクは含まない）', //p14
                        }, //43
                        {
                            questionTitle: '有担保ローンと無担保ローン',
                            relatedProblems: [],
                            content: '金利については無担保ローンの方が有担保ローンより低くなっている → 有担保ローンの方が無担保ローンより低くなっている', //p34
                        }, //44
                        {
                            questionTitle: '金融商品の中途解約リスク',
                            relatedProblems: [],
                            content: '中途解約リスク → 金利変動リスク', //p66
                        }, //45
                        {
                            questionTitle: '後期高齢者医療制度',
                            relatedProblems: [],
                            content: '全額公費負担 → 費用の1割、所定水準以上の所得者の場合2割（現役並の所得者は3割）', //p77
                        }, //46
                        {
                            questionTitle: '基礎利益',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '保険募集における禁止行為',
                            relatedProblems: [],
                            content: '禁止行為（他社の誹謗・中傷）に該当する', //p136-137
                        }, //48
                        {
                            questionTitle: '生命保険相談所',
                            relatedProblems: [],
                            content: '消費生活センター → 生命保険協会', //p170
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.fp2022c" next-route="daigaku.fp2021b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
