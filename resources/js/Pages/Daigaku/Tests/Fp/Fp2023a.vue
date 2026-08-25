<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "ファイナンシャルプラニングとコンプライアンス";
const subject = "2023年度 フォームA";
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
                    questionTitle="ライフプランニングの基礎"
                    :relatedProblems="['2023a1', '2023c1']"
                    :contents="[
                        // rev: 2026-05-30 確認済み
                        '正しい',
                        '[[ライフサイクル表]]の作成は、お客さまのライフプランニングを行ううえでの第一歩であり、次に作成する[[キャッシュフロー表]]の前提となる。', //p6
                        'キャッシュフローとは、各年における家計のフロー（収入と支出）から把握される資金の収支と、[[その結果増減するストック（貯蓄残高）のこと]]である。', //p7
                        '給与所得者の場合は、額面給与から税金や社会保険料を[[差し引いた後]]の額で、給与天引きの社内積立や生命保険料等を[[差し引く前]]の手取額ということになる。', //p8
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="リスクマネジメント"
                    :relatedProblems="['2023a2', '2023b2', '2023c2']"
                    :contents="[
                        // rev: 2026-05-30 確認済み
                        'ライフプランニングとリスクマネジメントは[[表裏一体の関係]]にあり、お客さまがライフプランを実現しようとするとき、リスクマネジメントは不可欠なものとなる。', //p14
                        '正しい',
                        '生命保険だけ → 生命保険と損害保険', //p16
                        '老後生活資金の準備は、[[生命保険商品だけではなく、さまざまな金融商品で対応することができる]]。', //p17
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローンの種類"
                    :relatedProblems="['2023a3', '2023b15', '2023c3']"
                    :contents="[
                        // rev: 2026-05-30 確認済み
                        '正しい',
                        '使途自由のフリーローンと使途が決まっている目的別ローンでは、[[目的別ローンの方が金利が低い]]。', //p34
                        'ローン契約の締結やカードの発行にあたっては、[[無担保・有担保を問わず、金融機関の審査がある]]。', //p34
                        '金融機関の審査については、[[銀行の審査が一番厳しく]]、[[信販会社などは緩やか]]になっているのが一般的である。', //p34
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="住宅取得資金計画"
                    :relatedProblems="['2023a4', '2023b4', '2023b17', '2023c4']"
                    :contents="[
                        // rev: 2026-05-30 確認済み
                        'お客さまのライフプラン上の住宅に関する考え方を[[明確にする]]ことが、住宅取得資金計画を立てるうえでの前提条件となる。', //p40
                        'こうしたマイホーム選びの価値観も時代の変化に伴い、ライフプランやライフスタイルに[[合わないもの]]になりつつある。', //p39
                        '住宅金融公庫廃止とお客さまのライフプランの多様化に伴い、[[そのニーズの多様化に対応した特徴のある独自のローンが開発されている]]。', //p42
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="教育資金設計"
                    :relatedProblems="['2023a5', '2023b6', '2023c25']"
                    :contents="[
                        // rev: 2026-05-30 確認済み
                        '正しい',
                        '[[学校外教育費]]には、学習塾や家庭教師・通信教育費といった補助学習費や[[芸術・文化活動・スポーツ]]などにかかる費用が含まれる。', //p56
                        'リスクマネジメントにおける必要保障額の中には、子どもの教育資金も[[含める]]。', //p56
                        '貸与型 → 給付型', //p60
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品のリスク"
                    :relatedProblems="['2023a6', '2023a42', '2023b42', '2023c42']"
                    :contents="[
                        // rev: 2026-05-30 確認済み
                        '集中投資 → 分散投資', //p68
                        '潜在化 → 顕在化', //p66
                        '[[ひとつの商品の長所と短所で考えるのではなく]]、常に金融資産全体としてお客さまのニーズに合った金融商品の構成になっているかというポートフォリオの視点で考えることが重要である。', //p67
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の資金準備"
                    :relatedProblems="['2023a7', '2023b43', '2023c7']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '40歳から50歳代前半の場合 → 退職を間近に控えている場合', //p73
                        '正しい',
                        '[[平均余命に10年を加算する]]などお客さまが長生きに対する不安を感じないように、必要年数を設定する必要がある。', //p73
                        'マクロ経済スライド制の導入などで、年金額が将来増えることは[[期待できなくなっている]]。', //p74
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の資金運用"
                    :relatedProblems="['2023a8', '2023b8', '2023c8']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '遺贈資金 → 生きがい資金', //p79
                        '生活資金 → 予備資金', //p79
                        '予備資金 → 生活資金', //p79
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡保険金の活用方法等"
                    :relatedProblems="['2023a9', '2023b9', '2023c9']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '万一のことが起こったら迅速に手続きをするのは当然として、[[保険金の運用についてお客さまのためになる有効なアドバイスをするのが生保ＦＰの重要な役割]]になる。', //p84
                        '子どもがまだ小さい場合は、妻が家族の大黒柱となることから、[[妻の病気・ケガや万一の場合に備えることも必要]]となる。', //p84
                        '正しい',
                        '遺族基礎年金の受給者である被保険者の妻に該当する場合、資産運用に[[障害者等のマル優・特別マル優の非課税の枠が利用できる]]。', //p86
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法"
                    :relatedProblems="['2023a10', '2023b22', '2023c10']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '保険業務や保険契約に関する法律は「保険監督法」と「保険取引法」に大別できるが、保険監督法に[[保険業法]]が含まれ、保険取引法に[[民法と保険法]]が関係する。', //p114
                        '商法 → 会社法', //p114
                        '保険契約の内容や効力に関する法律は、[[民法と保険法]]が中心になるが、実際の保険契約の詳細は保険約款の定めによる。', //p114
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法に定める不適切な説明と不適切な行為"
                    :relatedProblems="['2023a11', '2023b23', '2023c47']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '故意に不実のことを告げることは[[必要要件ではなく]]、[[結果的に誤った説明をしていれば不実告知に該当する]]ことに注意しなければならない。', //p141
                        '消費者のリスク判断を歪めるものであれば、「断定的判断の提供」に[[該当する]]。', //p141
                        '正しい',
                        '退去すべき旨の意思表示には、直接的な表現だけでなく、[[間接的な表現や身振り手振りも含まれる]]。', //p142
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）"
                    :relatedProblems="['2023a12', '2023b12', '2023c24']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '取引時確認において、お客さまが法人の場合、[[法人と実際の取引担当者双方の本人特定事項の確認が必要]]。', //p161
                        '金融機関が一度取引時確認を行っているお客さまについて、次回以降の取引では取引時確認済みのお客さまであることを確認できれば、[[再度の取引時確認は不要]]である。', //p162
                        '正しい',
                        '生命保険会社等の金融機関は、お客さまが取引時確認に応じない場合には応じるまでの間、取引に係る義務の履行を[[拒むことができる]]こととし、免責規定を設けている。', //p162
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険ＦＰの役割"
                    :relatedProblems="['2023a13', '2023b13', '2023c13']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '子どもの結婚資金 → こどもの教育資金', //p3
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="ライフステージ別のプランニング（40歳代既婚者）"
                    :relatedProblems="['2023a14', '2023b14']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '正しい',
                        '正しい',
                        '40歳以上55歳未満の第3号被保険者 → 40歳以上65歳未満の第2号被保険者', //p28
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローンの返済方法"
                    :relatedProblems="['2023a15', '2023b3', '2023c15']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '銀行等の住宅ローンは、主に「[[元利]]均等返済方式」が利用されている。', //p35
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローン金利の種類"
                    :relatedProblems="['2023a16', '2023b16', '2023c16']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '正しい',
                        '固定金利型ローン → 変動金利型ローン', //p37
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="独立行政法人住宅金融支援機構（「機構」）"
                    :relatedProblems="['2023a17', '2023b5']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '正しい',
                        '正しい',
                        '「機構」が行う「財形住宅融資」の融資額は財形貯蓄残高の[[10倍]]の額（最高[[4,000万円]]）までで、住宅取得価額（リフォーム融資は住宅改良価額）の[[90％]]が限度である。', //p41
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="確実性資金の商品選択"
                    :relatedProblems="['2023a18', '2023b18', '2023c18']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '正しい',
                        '正しい',
                        '課税形態が異なるものについては、「[[税引後の利回り]]」で比較するとよい。', //p64
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の保障"
                    :relatedProblems="['2023a19', '2023b20', '2023c20']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '夫の生命保険の家族特約として妻の医療保障を確保している場合、夫の死亡時に妻の医療保障がなくなる可能性があるため、[[妻の医療保障を単体で準備するのが望ましい]]。', //p80
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続時精算課税制度"
                    :relatedProblems="['2023a20', '2023c30']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '正しい',
                        '相続時精算課税制度は、受贈者が贈与者ごとに選択できるが、いったん選択すると選択した年以後贈与者の死亡時まで継続して適用され、[[暦年課税に変更することはできない]]。', //p90-91
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険を活用した相続対策"
                    :relatedProblems="['2023a21', '2023b21', '2023c21']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '受け取った生命保険金も「みなし相続財産」として相続財産の課税対象に加えられるため、その分も[[考慮して]]生命保険金額を決める必要がある。', //p100
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="2016年（平成28年）５月施行の保険業法の主な改正内容"
                    :relatedProblems="['2023a22', '2023b10', '2023c22']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '‌性別や年齢等のお客さまの属性や生活環境等に基づいてお客さま意向を推定（把握）する方法は[[認められている]]。', //p117
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険法"
                    :relatedProblems="['2023a23', '2023b11', '2023c23', '2023c48']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '正しい',
                        '生命保険募集人による告知妨害等があった場合には、原則として生命保険会社は告知義務違反を理由に契約を[[解除することができない]]。', //p160
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人情報の保護に関する法律（個人情報保護法）"
                    :relatedProblems="['2023a24', '2023b49', '2023c49']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '公刊物等によって公にされている情報や、暗号化等によって秘匿化されているものも[[含む]]。', //p164
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="金融ビッグバンによる金融システムの規制緩和後の資産運用"
                    :relatedProblems="['2023a25', '2023b1', '2023c14']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '外貨建金融商品',
                        '為替リスク',
                        '最適の',
                        '自己責任',
                        'ディスクロージャー', // 問25〜29
                    ]"
                    :labels="[
                        'エ', //25
                        'カ', //26
                        'イ', //27
                        'キ', //28
                        'ケ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="老後生活設計の医療費等"
                    :relatedProblems="['2023a30', '2023b7', '2023c43']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '14',
                        '20',
                        '2',
                        '全額',
                        '標準報酬月額', // 問30〜34
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
                    questionTitle="保険募集におけるコンプライアンスと禁止行為"
                    :relatedProblems="['2023a35', '2023b35', '2023c35']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '潜在的',
                        '適合性',
                        '重要な事項',
                        '電磁的',
                        '契約概要', // 問35〜39
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
                        {
                            // rev: 2026-05-31 確認済み
                            questionTitle: 'キャッシュフロー表の変動要素',
                            content: '正しい',
                            relatedProblems: ['2023a40', '2023b40', '2023c40'],
                        }, //40
                        {
                            // rev: 2026-05-31 確認済み
                            questionTitle: '住宅取得のための自己資金',
                            content: '正しい',
                            relatedProblems: ['2023a41'],
                        }, //41
                        {
                            // rev: 2026-05-30 確認済み
                            questionTitle: '金融商品のリスク',
                            content: '中途解約リスク → 金利変動リスク', //p66
                            relatedProblems: ['2023a6', '2023a42', '2023b42', '2023c42'],
                        }, //42
                        {
                            // rev: 2026-05-31 確認済み
                            questionTitle: '高齢者医療制度',
                            content: '後期高齢者の場合、医療機関の窓口ではかかった費用の1割、[[所定水準以上の所得者の場合は2割（そのうち現役並み所得者は3割）]]を負担する。', //p77
                            relatedProblems: ['2023a43'],
                        }, //43
                        {
                            // rev: 2026-05-31 確認済み
                            questionTitle: '相続税の計算手順',
                            content: '5年 → 7年', //p94
                            relatedProblems: ['2023a44', '2023b44', '2023c44'],
                        }, //44
                        {
                            // rev: 2026-05-31 確認済み
                            questionTitle: '経営破綻した場合の契約条件の変更',
                            content: '80% → 90%', //p123
                            relatedProblems: ['2023a45'],
                        }, //45
                        {
                            // rev: 2026-05-31 確認済み
                            questionTitle: '保険募集における違法行為',
                            content: '正しい',
                            relatedProblems: ['2023a46', '2023b46', '2023c46'],
                        }, //46
                        {
                            // rev: 2026-05-31 確認済み
                            questionTitle: '金融サービスの提供に関する法律（金融サービス提供法）',
                            content: '正しい',
                            relatedProblems: ['2023a47', '2023b47'],
                        }, //47
                        {
                            // rev: 2026-05-31 確認済み
                            questionTitle: '金融商品取引法',
                            content: '正しい',
                            relatedProblems: ['2023a48', '2023b48'],
                        }, //48
                        {
                            // rev: 2026-05-31 確認済み
                            questionTitle: '生命保険相談所',
                            content: '正しい',
                            relatedProblems: ['2023a49', '2023b24', '2023c12'],
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.fp2024c" next-route="daigaku.fp2023b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
