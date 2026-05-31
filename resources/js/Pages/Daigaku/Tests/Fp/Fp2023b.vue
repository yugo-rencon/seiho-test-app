<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "ファイナンシャルプラニングとコンプライアンス";
const subject = "2023年度 フォームB";
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
                    questionTitle="金融ビッグバンによる金融システムの規制緩和後の資産運用"
                    :relatedProblems="['2023a25', '2023b1', '2023c14']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '金融システムの規制緩和により、「外為の規制[[緩和]]」「金融機関の垣根の[[撤廃]]」「外国資本の[[参入]]」、そして「金融新商品の登場」など、金融業界は大変革を遂げた。', //p4
                        '正しい',
                        '資産設計においては、種類別分散や時間的分散、通貨的分散等を取り入れ、リスクとリターンのバランスを考慮して[[分散投資を行い]]、常に最適のポートフォリオを考える必要がある。', //p5
                        '金融機関の選択から金融商品の選択まで、運用に関することもすべて[[お客さまの自己責任で行う]]ことが求められるようになった。', //p5
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
                    questionTitle="ローンの返済方法"
                    :relatedProblems="['2023a15', '2023b3', '2023c15']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '返済回数が同一の場合、元金均等返済方式による「返済総額」は、元利均等返済方式よりも[[少なくなる]]。', //p35
                        '元利均等返済方式は、毎回の返済金額は返済開始から終了まで一定（均等）で、[[利息ならびに返済金額の計算は、前回返済時から今回返済時までに生じた利息に元金の一部を加えた金額が常に等しく]]なるようになっている。', //p35
                        '正しい',
                        '銀行等の住宅ローンは、主に「[[元利]]均等返済方式」が利用されている。', //p35
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
                    questionTitle="独立行政法人住宅金融支援機構（「機構」）"
                    :relatedProblems="['2023a17', '2023b5']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '団体信用生命保険契約 → 住宅融資保険契約', //p40
                        '「機構」が行う財形住宅融資は、一般財形貯蓄・財形年金貯蓄・財形住宅貯蓄のいずれかに[[1年]]以上継続して加入し、申込日前[[2年]]以内に財形貯蓄の預入れを行い、かつ、申込日における残高が[[50万円]]以上ある人が対象となる。', //p41
                        '機構の証券化支援業務に対応して民間金融機関が取り扱っている「フラット35」には、[[「買取型」と「保証型」の2通り]]がある。', //p44
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="教育資金設計"
                    :relatedProblems="['2023a5', '2023b6', '2023c25']"
                    :contents="[
                        // rev: 2026-05-30 確認済み
                        '有担保や無担保、変動金利や固定金利の商品がそれぞれある', //p59
                        '[[子ども]]が病気やケガで入院したときなどの医療保障や、[[親]]に万一のことがあった場合の育英年金がついているものもある。', //p60
                        '銀行によって仕組みが[[異なる]]。', //p60
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後生活設計の医療費等"
                    :relatedProblems="['2023a30', '2023b7', '2023c43']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '3ヶ月以内 → 14日以内', //p76
                        '5年間 → 2年間', //p76
                        '高い方の額 → 低い方の額', //p76
                        '正しい',
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
                    questionTitle="2016年（平成28年）5月施行の保険業法の主な改正内容"
                    :relatedProblems="['2023a22', '2023b10', '2023c22']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '注意喚起情報 → 契約概要', //p116
                        '[[契約締結前の段階]]においては、お客さまの最終的な意向と契約の申込みを行おうとする保険契約の内容が合致しているかどうかについて、「意向確認書面」を用いてお客さまに確認（＝意向確認）する必要がある。', //p117
                        '正しい',
                        '「保険金額や保険料を含めたお客さま向けの個別プランを説明する前に、例えば、アンケートなどによりそのお客さま意向を事前に把握する方法」は[[認められている]]。', //p117
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険法"
                    :relatedProblems="['2023a23', '2023b11', '2023c23', '2023c48']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '生命保険募集人による告知妨害等があった場合には、原則として生命保険会社は告知義務違反を理由に契約を[[解除することができない]]。', //p160
                        '保険金の支払時期について、適正な保険金の支払いのために必要な調査に要する合理的な期間が経過したあとについては生命保険会社が[[遅滞の責任を負う（遅延利息の支払いなど）]]。', //p160
                        '正しい',
                        '既払込保険料相当額 → 解約返戻金相当額', //p160
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
                        'お客さまに隠ぺいの目的があった場合には、[[1年以下の拘禁刑もしくは100万円以下の罰金が科される（またはその併科）]]。', //p162
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険FPの役割"
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
                    questionTitle="ライフステージ別のプランニング（50歳代既婚者）"
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
                    questionTitle="ローンの種類"
                    :relatedProblems="['2023a3', '2023b15', '2023c3']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '正しい',
                        '正しい',
                        '金融機関の審査については、[[銀行の審査が一番厳しく]]、[[信販会社などは緩やか]]になっているのが一般的である。', //p34
                        '正しい',
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
                    questionTitle="住宅取得資金計画"
                    :relatedProblems="['2023a4', '2023b4', '2023b17', '2023c4']"
                    :contents="[
                        // rev: 2026-05-30 確認済み
                        '正しい',
                        '正しい',
                        '所得控除 → 税額控除', //p50
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
                    questionTitle="老後生活設計の考え方"
                    :relatedProblems="['2023b19', '2023c19']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '正しい',
                        '年功序列賃金体系や終身雇用制度の見直しが行われる一方で、高年齢者雇用安定法による「雇用確保措置」で[[60歳定年という概念がなくなり]]、雇用環境が大きく変化している現在では、[[個々の老後生活設計に応じたコンサルティング]]がますます求められている。', //p70
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の保障"
                    :relatedProblems="['2023a19', '2023b20', '2023c20']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '資産家などで相続対策を実施する場合は死亡保障などを準備することが[[有効である]]。', //p80
                        '正しい',
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
                    questionTitle="保険業法"
                    :relatedProblems="['2023a10', '2023b22', '2023c10']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '保険業法は、[[保険事業にのみ]]認められる相互会社について、その組織・運営に関する規定を定めている。', //p114
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法に定める不適切な説明と不適切な行為"
                    :relatedProblems="['2023a11', '2023b23', '2023c47']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '正しい',
                        '正しい',
                        '勧誘に際し、当該商品のメリットを強調し意識的にデメリットを説明しないケースは「不利益事実の不告知」に[[該当する]]。', //p142
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険相談所・裁定審査会"
                    :relatedProblems="['2023a49', '2023b24', '2023c12']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '正しい',
                        '正しい',
                        '3ヶ月 → 1ヶ月', //p170
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="キャッシュフロー表の作成"
                    :relatedProblems="['2023b25']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        'ライフサイクル',
                        'ストック',
                        '公的年金・企業年金・個人年金',
                        '税金や社会保険料',
                        '含む', // 問25〜29
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
                    questionTitle="マネープランニングにおける資金運用の3要素"
                    :relatedProblems="['2023b30']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '流動性',
                        '元本割れ',
                        'ＭＲＦ',
                        '財形貯蓄',
                        '外貨預金', // 問30〜34
                    ]"
                    :labels="[
                        'オ', //30
                        'カ', //31
                        'イ', //32
                        'ケ', //33
                        'ウ', //34
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
                            questionTitle: '住宅ローンの繰上げ返済',
                            content: '正しい',
                            relatedProblems: ['2023b41'],
                        }, //41
                        {
                            // rev: 2026-05-30 確認済み
                            questionTitle: '金融商品のリスク',
                            content: '中途解約リスク → 金利変動リスク', //p66
                            relatedProblems: ['2023a6', '2023a42', '2023b42', '2023c42'],
                        }, //42
                        {
                            // rev: 2026-05-31 確認済み
                            questionTitle: '老後生活設計の基礎知識',
                            content: 'マクロ経済スライド制の導入などで、年金額が将来増えることは[[期待できなくなっている]]。', //p74
                            relatedProblems: ['2023a7', '2023b43', '2023c7'],
                        }, //43
                        {
                            // rev: 2026-05-31 確認済み
                            questionTitle: '相続税の計算手順',
                            content: '5年 → 7年', //p94
                            relatedProblems: ['2023a44', '2023b44', '2023c44'],
                        }, //44
                        {
                            // rev: 2026-05-31 確認済み
                            questionTitle: '生命保険会社の経営破綻時の取引制限',
                            content: '契約の継続を希望する場合、取扱いを制限されている期間中も[[保険料を払い込む必要がある]]。',//p125
                            relatedProblems: ['2023b45'],
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
                            content: '保険法 → 保険業法',
                            relatedProblems: ['2023a48', '2023b48'],
                        }, //48
                        {
                            // rev: 2026-05-31 確認済み
                            questionTitle: '個人情報の保護に関する法律（個人情報保護法）',
                            content: '正しい',
                            relatedProblems: ['2023a24', '2023b49', '2023c49'],
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.fp2023a" next-route="daigaku.fp2023c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
