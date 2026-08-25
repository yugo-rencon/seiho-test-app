<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "ファイナンシャルプラニングとコンプライアンス";
const subject = "2023年度 フォームC";
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
                        '生保ＦＰがライフイベントを決めるのではなく、一般的なライフイベントを示すことによって、[[お客さまの希望を聞き出すような姿勢]]が重要である。', //p6
                        '[[ライフサイクル表]]の作成は、お客さまのライフプランニングを行ううえでの第一歩であり、次に作成する[[キャッシュフロー表]]の前提となる。', //p6
                        '正しい',
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
                        // rev: 2026-05-31 確認済み
                        '有担保ローンの方が無担保ローンよりも金利は[[低くなっている]]。', //p34
                        '正しい',
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
                    questionTitle="住宅ローンの知識"
                    :relatedProblems="['2023c5']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '全期間変動金利 → 全期間固定金利', //p40
                        '「機構」が行う財形住宅融資は、一般財形貯蓄・財形年金貯蓄・財形住宅貯蓄のいずれかに[[1年]]以上継続して加入し、申込日前2年以内に財形貯蓄の預入れを行い、かつ、申込日における残高が[[50万円]]以上ある人が対象となる。', //p41
                        '正しい',
                        '「フラット35（買取型）」の融資を利用していて、加入者が死亡・身体障害状態となった場合に保険金等により、残りの住宅ローンが弁済される（[[新機構団信]]には、3大疾病、介護の場合も保障する[[新3大疾病付機構団信]]もある。', //p41
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="ポートフォリオ"
                    :relatedProblems="['2023c6']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '債券 → 不動産', //p65
                        '正しい',
                        'マネーポートフォリオ作成の目的は、金融資産のさまざまなリスクを確認したうえで、金融資産の組合せによって全体としてのリスクをできるだけ[[軽減]]し、リターンをできるだけ大きくすることである。', //p66
                        '集中投資 → 分散投資', //p68
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後生活設計の基礎知識"
                    :relatedProblems="['2023a7', '2023b43', '2023c7']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
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
                        '保険契約の内容や効力に関する法律は、[[民法と保険法]]が中心になるが、実際の保険契約の詳細は保険約款の定めによる。', //p114
                        '正しい',
                        '保険会社の保護 → 保険契約者等の保護', //p118
                        'ディスクロージャー資料は、本店または主たる事務所、支店または従たる事務所に備え置くこととされており、生命保険会社における支社、営業所、支部なども[[対象になる]]。', //p119
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法以外の保険販売等に関する法律"
                    :relatedProblems="['2023c11']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '困惑の状況から解放されたときから原則[[1年]]以内で、契約締結時から原則[[5年]]以内となる', //p143
                        '生命保険募集人は、会社の行う各種手続きのために、マイナンバーを取得することもあるが、法令で限定的に定められている利用範囲を超えてマイナンバーを収集したり、[[お客さま管理のためにマイナンバーを利用したりしてはならない]]。', //p169
                        '保険法 → 保険業法', //p146
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険相談所・裁定審査会"
                    :relatedProblems="['2023a49', '2023b24', '2023c12']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '各都道府県の消費生活センター内 → 生命保険協会', //p170
                        '正しい',
                        '20日間 → 1ヶ月', //p170
                        '指定裁判機関 → 指定紛争解決機関', //p170
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
                    questionTitle="金融ビッグバンによる金融システムの規制緩和後の資産運用"
                    :relatedProblems="['2023a25', '2023b1', '2023c14']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '正しい',
                        '正しい',
                        '資産設計においては、[[種類別分散や時間的分散、通貨的分散等を取り入れ]]、リスクとリターンのバランスを考慮して[[分散投資を行い]]、常に最適のポートフォリオを考える必要がある。', //p5
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
                        '返済回数が同一の場合、元金均等返済方式による「返済総額」は、元利均等返済方式よりも[[少なくなる]]。', //p35
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
                    questionTitle="住宅ローンの見直し"
                    :relatedProblems="['2023c17']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '正しい',
                        '正しい',
                        '「返済額軽減型」に比べ、利息軽減額は[[「期間短縮型（中抜き方式）」の方が大きい]]。', //p46
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
                        '正しい',
                        '正しい',
                        '正しい',
                        '公的介護保険にも[[1割（一定以上所得のある人は2割または3割）]]の自己負担があるため、日常生活を営むうえで経済的負担が大きい。', //p80
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
                    questionTitle="2016年（平成28年）5月施行の保険業法の主な改正内容"
                    :relatedProblems="['2023a22', '2023b10', '2023c22']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '正しい',
                        '注意喚起情報 → 契約概要', //p116
                        '正しい',
                        '正しい',
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
                        '正しい',
                        '正しい',
                        '既払込保険料相当額 → 解約返戻金相当額', //p160
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）"
                    :relatedProblems="['2023a12', '2023b12', '2023c24']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '正しい',
                        '正しい',
                        '金融機関が一度取引時確認を行っているお客さまについて、次回以降の取引では取引時確認済みのお客さまであることを確認できれば、[[再度の取引時確認は不要]]である。', //p162
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="教育資金設計"
                    :relatedProblems="['2023a5', '2023b6', '2023c25']"
                    :contents="[
                        // rev: 2026-05-30 確認済み
                        '元利均等',
                        '育英年金',
                        '5000円〜10000円',
                        '給付型',
                        '純明勢非課税世帯・準ずる世帯', // 問25〜29
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
                    questionTitle="相続時精算課税制度"
                    :relatedProblems="['2023a20', '2023c30']"
                    :contents="[
                        // rev: 2026-05-31 確認済み
                        '60',
                        '2,500',
                        '20',
                        '贈与時',
                        '2月1日から3月15日', // 問30〜34
                    ]"
                    :labels="[
                        'エ', //30
                        'カ', //31
                        'イ', //32
                        'キ', //33
                        'ケ', //34
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
                        // 問40〜49
                        {
                            // rev: 2026-05-31 確認済み
                            questionTitle: 'キャッシュフロー表の変動要素',
                            content: '正しい',
                            relatedProblems: ['2023a40', '2023b40', '2023c40'],
                        }, //40
                        {
                            // rev: 2026-05-31 確認済み
                            questionTitle: '住宅取得の自己資金',
                            content: '4割以上 → 2割以上', //p49
                            relatedProblems: ['2023c41'],
                        }, //41
                        {
                            // rev: 2026-05-30 確認済み
                            questionTitle: '金融商品のリスク',
                            content: '中途解約リスク → 金利変動リスク', //p66
                            relatedProblems: ['2023a6', '2023a42', '2023b42', '2023c42'],
                        }, //42
                        {
                            // rev: 2026-05-31 確認済み
                            questionTitle: '老後生活設計の医療費等',
                            content: '1ヶ月以内 → 14日以内', //p76
                            relatedProblems: ['2023a30', '2023b7', '2023c43'],
                        }, //43
                        {
                            // rev: 2026-05-31 確認済み
                            questionTitle: '相続税の計算手順',
                            content: '5年 → 7年', //p94
                            relatedProblems: ['2023a44', '2023b44', '2023c44'],
                        }, //44
                        {
                            // rev: 2026-05-31 確認済み
                            questionTitle: '保険募集と禁止行為',
                            content: '正しい',
                            relatedProblems: ['2023c45'],
                        }, //45
                        {
                            // rev: 2026-05-31 確認済み
                            questionTitle: '保険募集における違法行為',
                            content: '正しい',
                            relatedProblems: ['2023a46', '2023b46', '2023c46'],
                        }, //46
                        {
                            // rev: 2026-05-31 確認済み
                            questionTitle: '消費者契約法に定める不適切な行為',
                            content: '退去すべき旨の意思表示には、直接的な表現だけでなく、[[間接的な表現や身振り手振りも含まれる]]。', //p142
                            relatedProblems: ['2023a11', '2023b23', '2023c47'],
                        }, //47
                        {
                            // rev: 2026-05-31 確認済み
                            questionTitle: '保険法',
                            content: '正しい',
                            relatedProblems: ['2023a23', '2023b11', '2023c23', '2023c48'],
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

            <TestNavigationButtons previous-route="daigaku.fp2023b" next-route="daigaku.fp2022a" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
