<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "ファイナンシャルプラニングとコンプライアンス";
const subject = "2025年度 フォームA";
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
                    questionTitle="生命保険ＦＰの役割"
                    :relatedProblems="['2025a1', '2025b1', '2025c1']"
                    :contents="[
                        // rev: 2026-05-28 確認済み
                        'ファイナンシャル・プランナーとは、ファイナンシャル・プランニングを行うエキスパートであり、プランを立てる際に必要に応じて、[[弁護士、税理士、不動産の専門家などの協力を得ながら]]、お客さまの総合的な資産設計を行い、その実行の手助けをすることを主たる職務とする。', //p1
                        '企業がＦＰを養成・誕生させる目的は、お客さまのニーズが複雑化・多様化する現在、従来のような自社商品だけの知識や、保険商品だけを勧める販売手法ではお客さまのニーズに十分に応えることが[[難しくなってきた]]からである。', //p2
                        'ＦＰが近年注目されるようになった背景には、①個人の金融資産の増大、[[②金融の自由化]]、③急速な高齢社会の進展等があげられる。', //p2
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="ライフプランニングの基礎"
                    :relatedProblems="['2025a2', '2025b2', '2025c2']"
                    :contents="[
                        // rev: 2026-05-28 確認済み
                        '生保ＦＰがライフイベントを決めるのではなく、一般的なライフイベントを示すことによって、[[お客さまの希望を聞き出すような姿勢]]が重要である。', //p6
                        '正しい',
                        '[[ライフサイクル表]]の作成は、お客さまのライフプランニングを行ううえでの第一歩であり、次に作成する[[キャッシュフロー表]]の前提となる。', //p6
                        'キャッシュフローとは、各年における家計のフロー（収入と支出）から把握される資金の収支と、[[その結果増減するストック（貯蓄残高）のこと]]である。', //p7
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="リスクマネジメント"
                    :relatedProblems="['2025a3', '2025a42', '2025b3', '2025b42', '2025c3', '2025c41']"
                    :contents="[
                        // rev: 2026-05-28 確認済み
                        '正しい',
                        '死亡に伴うリスクには、その人の死亡によって予定外の大きな支出が[[発生するものもある]]。', //p16
                        '生命保険だけ → 生命保険と損害保険', //p16
                        '老後生活資金の準備は、[[生命保険商品だけではなく、さまざまな金融商品で対応することができる]]。', //p17
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="ライフステージ別のプランニング（20歳代〜40歳代）"
                    :relatedProblems="['2025a4', '2025a14', '2025b4', '2025c14']"
                    :contents="[
                        // rev: 2026-05-28 確認済み
                        '提案する必要はない → 提案する必要がある', //p21
                        '人生の３大支出である「教育資金」「住宅資金」「老後生活資金」のうち、[[教育資金と住宅資金]]は、マネーポートフォリオの中心となる。', //p23
                        '正しい',
                        '定年後も残る住宅ローンの返済は、退職金での一括返済も考えられるが、公的年金だけでは老後生活資金が[[不十分]]なので、退職金をローンの返済資金として考えることは[[妥当とはいえない]]。', //p27
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="住宅取得資金計画"
                    :relatedProblems="['2025a5', '2025b5', '2025c5']"
                    :contents="[
                        // rev: 2026-05-28 確認済み
                        '購入金額の1割 → 購入金額の2割', //p49
                        '自己資金を積み立てるための金融商品の選択基準は、収益性だけでなく、気に入った物件が見つかった場合、すぐに手付金等が準備できるような[[流動性も求められる]]。', //p50
                        '正しい',
                        '初年度に確定申告した会社員等の場合は、次年度以降の確定申告は[[必要ない]]。', //p50
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品のリスク"
                    :relatedProblems="['2025a6', '2025a18', '2025b7', '2025b18', '2025c6', '2025c18']"
                    :contents="[
                        // rev: 2026-05-28 確認済み
                        '集中投資 → 分散投資', //p68
                        '潜在化 → 顕在化', //p66
                        'だれもが安全で高い収益が得られる商品を選びたいと望むが、実際には、「絶対に安全で高い収益や利回り」が得られる商品は[[存在しない]]。', //p68
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後生活設計の基礎知識"
                    :relatedProblems="['2025a7', '2025b19', '2025c7']"
                    :contents="[
                        // rev: 2026-05-28 確認済み
                        '近所付き合いの費用・趣味や「生きがい」のための費用など「定年によって発生する支出」もあるので、生活費（消費部分）は[[極端に少なくなることはない]]。', //p73
                        '[[平均余命に10年を加算する]]などお客さまが長生きに対する不安を感じないように、必要年数を設定する必要がある。', //p73
                        '老後生活資金の不足額が[[異なる]]ため、プランニングも[[異なる]]。', //p73
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の保障"
                    :relatedProblems="['2025a8', '2025b8', '2025c8']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        '生命保険会社の[[医療保険などによる医療保障の充実]]が必要になる。', //p80
                        '夫の生命保険の家族特約として妻の医療保障を確保している場合、夫の死亡時に妻の医療保障がなくなる可能性があるため、[[妻の医療保障を単体で準備するのが望ましい]]。', //p80
                        '正しい',
                        '公的介護保険にも[[1割（一定以上所得のある人は2割または3割）]]の自己負担があるため、日常生活を営むうえで経済的負担が大きい。', //p80
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の計算手順"
                    :relatedProblems="['2025a9', '2025c9']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        '相続財産評価額の合計額から、非課税財産・葬式費用・債務を差し引き、相続開始前[[7年]]以内の贈与財産を加算して課税価格合計額を算出する。ただし、相続開始前[[3年超7年以内]]の贈与は、総額100万円まで加算しない。', //p94
                        '課税価格合計額から遺産に係る基礎控除（[[3,000万円]] + [[600万円]] × 法定相続人の数）を行い算出する。', //p94
                        '相続放棄した者も法定相続人に[[加える]]。', //p94
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法"
                    :relatedProblems="['2025a10', '2025b11', '2025c10']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        '保険業務や保険契約に関する法律は「保険監督法」と「保険取引法」に大別できるが、保険監督法に[[保険業法]]が含まれ、保険取引法に[[民法と保険法]]が関係する。', //p114
                        '正しい',
                        '保険契約の内容や効力に関する法律は、[[民法と保険法]]が中心になるが、実際の保険契約の詳細は保険約款の定めによる。', //p114
                        '保険業法は、[[保険事業にのみ]]認められる相互会社について、その組織・運営に関する規定を定めている。', //p114
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）"
                    :relatedProblems="['2025a11', '2025c11']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        '取引時確認において、お客さまが法人の場合、[[法人と実際の取引担当者双方の本人特定事項の確認が必要]]。', //p161
                        '金融機関が一度取引時確認を行っているお客さまについて、次回以降の取引では取引時確認済みのお客さまであることを確認できれば、[[再度の取引時確認は不要]]である。', //p162
                        'お客さまに隠ぺいの目的があった場合には、[[1年以下の拘禁刑もしくは100万円以下の罰金が科される（またはその併科）]]。', //p162
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険販売等に関する法律"
                    :relatedProblems="['2025a12', '2025b12', '2025c12']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        '消費者が誤認に気がついたときや、困惑の状況から解放されたときから原則[[1年]]以内で、契約締結時から原則[[5年]]以内となる', //p143
                        '生命保険募集人は、会社の行う各種手続きのために、マイナンバーを取得することもあるが、法令で限定的に定められている利用範囲を超えてマイナンバーを収集したり、[[お客さま管理のためにマイナンバーを利用したりしてはならない]]。', //p169
                        '保険法 → 保険業法', //p146
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="キャッシュフロー表の作成"
                    :relatedProblems="['2025a13', '2025b13', '2025c13']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        '正しい',
                        '継続的な支出には、基本生活費・住居費（[[住宅ローン返済額を含む]]）・生命保険料・損害保険料などがある。', //p8
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="ライフステージ別のプランニング（50歳代既婚者）"
                    :relatedProblems="['2025a4', '2025a14', '2025b4', '2025c14']"
                    :contents="[
                        // rev: 2026-05-28 確認済み
                        '厚生年金保険のモデル年金額（含む妻の国民年金受給額）は、「ゆとりある老後生活費」の額を[[下回っている]]。', //p31
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローンの種類"
                    :relatedProblems="['2025a15', '2025b14', '2025c15']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
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
                    questionTitle="独立行政法人住宅金融支援機構（「機構」）"
                    :relatedProblems="['2025a16', '2025b15', '2025c16']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        '正しい',
                        '正しい',
                        '「機構」が行う「財形住宅融資」の融資金利は、返済の開始から終了までの全期間、[[5年]]ごとに適用金利を見直す[[5年]]固定金利制である。なお、フラット35と組み合わせて[[利用することができる]]。', //p41
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="確実性資金の商品選択"
                    :relatedProblems="['2025a17', '2025b17']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        '正しい',
                        '正しい',
                        '課税形態が異なるものについては、「[[税引後の利回り]]」で比較するとよい。', //p64
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品のリスクの種類"
                    :relatedProblems="['2025a6', '2025a18', '2025b7', '2025b18', '2025c6', '2025c18']"
                    :contents="[
                        // rev: 2026-05-28 確認済み
                        '正しい',
                        '貨幣価値が上昇するリスク → 貨幣価値が下落するリスク', //p67
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後生活設計の考え方"
                    :relatedProblems="['2025a19']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
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
                    questionTitle="老後の資金運用"
                    :relatedProblems="['2025a20', '2025b20', '2025c20']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '老後の資金運用は、基本的に「[[安全性]]」が原則である。老後資金の運用は「収益性」「安全性」に「流動性」も加えたマネーマネジメントだけでなく、万一の入院等のために「リスクマネジメント」を十分考慮した[[バランスの良いマネーポートフォリオ]]が重要となる。', //p79
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続時精算課税制度"
                    :relatedProblems="['2025a21', '2025b47']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        '正しい',
                        '相続時精算課税制度は、受贈者が贈与者ごとに選択できるが、いったん選択すると選択した年以後贈与者の死亡時まで継続して適用され、[[暦年課税に変更することはできない]]。', //p90-91
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険を活用した相続対策"
                    :relatedProblems="['2025a22', '2025b21', '2025c21']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        '正しい',
                        '正しい',
                        'この際注意すべきことは、他の相続人に渡す財産額は、[[遺留分相当額以上]]とすることである。', //p99
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険募集と禁止行為"
                    :relatedProblems="['2025a23', '2025a48', '2025b48', '2025c22']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        'お客さまの要望に沿った提案であっても、お客さまに現在の職業について事実と異なる告知を勧めることは禁止行為に[[該当する]]。', //p132
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険法"
                    :relatedProblems="['2025a24', '2025b24', '2025c24']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '既払込保険料相当額 → 解約返戻金相当額', //p160
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="ローン金利の種類"
                    :relatedProblems="['2025a25', '2025b25', '2025c25']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        '2',
                        '5',
                        '元金',
                        '変動金利型',
                        '短い', // 問25〜29
                    ]"
                    :labels="[
                        'エ', //25
                        'オ', //26
                        'キ', //27
                        'コ', //28
                        'ア', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="相続対策"
                    :relatedProblems="['2025a30', '2025b10']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        '財産の種類',
                        '相続人',
                        '死亡時の時価',
                        '株式（自社株）',
                        '不動産', // 問30〜34
                    ]"
                    :labels="[
                        'カ', //30
                        'ケ', //31
                        'ウ', //32
                        'イ', //33
                        'ク', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="保険募集のコンプライアンスと禁止行為"
                    :relatedProblems="['2025a7']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
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
                            // rev: 2026-05-29 確認済み
                            questionTitle: '外貨建金融商品の利用',
                            content: 'ライフプラン（生活設計）の実現を目指して、金融資産の運用効率を上げるためには、外貨建ての金融商品を利用することは通貨的分散の効果があるが、為替リスク等も考慮に入れる[[必要がある]]。', //p5
                            relatedProblems: ['2025a40', '2025b40', '2025c40'],
                        }, //40
                        {
                            // rev: 2026-05-29 確認済み
                            questionTitle: 'キャッシュフロー表の変動要素',
                            content: '正しい',
                            relatedProblems: ['2025a41', '2025b41'],
                        }, //41
                        {
                            // rev: 2026-05-28 確認済み
                            questionTitle: 'リスクマネジメント',
                            content: 'ライフプランニングとリスクマネジメントは[[表裏一体の関係]]にあり、お客さまがライフプランを実現しようとするとき、リスクマネジメントは不可欠なものとなる。', //p14
                            relatedProblems: ['2025a3', '2025a42', '2025b3', '2025b42', '2025c3', '2025c41'],
                        }, //42
                        {
                            // rev: 2026-05-29 確認済み
                            questionTitle: '住宅に対する考え方',
                            content: '正しい',
                            relatedProblems: ['2025a43', '2025b43', '2025c43'],
                        }, //43
                        {
                            // rev: 2026-05-29 確認済み
                            questionTitle: '住宅ローンの借換え',
                            content: '正しい',
                            relatedProblems: ['2025a44', '2025b44', '2025c42'],
                        }, //44
                        {
                            // rev: 2026-05-29 確認済み
                            questionTitle: 'ゆとりある老後生活費',
                            content: '正しい',
                            relatedProblems: ['2025a45'],
                        }, //45
                        {
                            // rev: 2026-05-29 確認済み
                            questionTitle: '高齢者医療制度',
                            content: '後期高齢者の場合、医療機関の窓口ではかかった費用の1割、[[所定水準以上の所得者の場合は2割（そのうち現役並み所得者は3割）]]を負担する。', //p77
                            relatedProblems: ['2025a46', '2025b46', '2025c46'],
                        }, //46
                        {
                            // rev: 2026-05-29 確認済み
                            questionTitle: '生命保険会社の経営破綻時の取引制限',
                            content: '正しい',
                            relatedProblems: ['2025a47', '2025c47'],
                        }, //47
                        {
                            // rev: 2026-05-29 確認済み
                            questionTitle: '保険募集と禁止行為',
                            content: '正しい',
                            relatedProblems: ['2025a23', '2025a48', '2025b48', '2025c22'],
                        }, //48
                        {
                            // rev: 2026-05-29 確認済み
                            questionTitle: '保険募集における違法行為',
                            content: '保険業法で規定されている保険募集における禁止行為は、[[行政処分を受ける可能性が生じる]]。', //p138
                            relatedProblems: ['2025a49', '2025b49', '2025c49'],
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.fp2026c" next-route="daigaku.fp2025b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
