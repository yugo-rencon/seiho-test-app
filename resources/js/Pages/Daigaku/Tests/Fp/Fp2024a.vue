<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "ファイナンシャルプラニングとコンプライアンス";
const subject = "2024年度 フォームA";
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
                    questionTitle="生命保険FPの役割"
                    :relatedProblems="['2024a1', '2024b1', '2024c1']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        'ファイナンシャル・プランナーとは、ファイナンシャル・プランニングを行うエキスパートであり、プランを立てる際に必要に応じて、[[弁護士、税理士、不動産の専門家などの協力を得ながら]]、お客さまの総合的な資産設計を行い、その実行の手助けをすることを主たる職務とする。', //p1
                        '企業がＦＰを養成・誕生させる目的は、お客さまのニーズが複雑化・多様化する現在、従来のような自社商品だけの知識や、保険商品だけを勧める販売手法ではお客さまのニーズに十分に応えることが[[難しくなってきた]]からである。', //p2
                        '正しい',
                        '子どもの結婚資金 → こどもの教育資金', //p3
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="リスクマネジメント"
                    :relatedProblems="['2024a2', '2024b2', '2024c2']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        '正しい',
                        '死亡に伴うリスクには、その人の死亡によって予定外の大きな支出が[[発生するものもある]]。', //p16
                        '生命保険だけ → 生命保険と損害保険', //p16
                        '老後生活資金の準備は、[[生命保険商品だけではなく、さまざまな金融商品で対応することができる]]。', //p17
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローンの種類"
                    :relatedProblems="['2024a3', '2024c41']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        '正しい',
                        '有担保ローンの方が無担保ローンよりも金利は[[低くなっている]]。', //p34
                        'ローン契約の締結やカードの発行にあたっては、[[無担保・有担保を問わず、金融機関の審査がある]]。', //p34
                        '使途が制限されていないローンほど金利は[[高く]]といえる。', //p34
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="教育資金設計"
                    :relatedProblems="['2024a4', '2024b16', '2024c17']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        'リスクマネジメントにおける必要保障額の中には、子どもの教育資金も[[含める]]。', //p56
                        '[[学校外教育費]]には、学習塾や家庭教師・通信教育費といった補助学習費や[[芸術・文化活動・スポーツ]]などにかかる費用が含まれる。', //p56
                        '正しい',
                        '「給付型」奨学金の対象となれば、進学先の学校の授業料・入学金も[[免除または減額される]]。', //p60
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="資金運用の3要素による金融商品の分類"
                    :relatedProblems="['2024a5', '2024b5', '2024c5']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        '正しい',
                        'ＭＲＦは、「[[流動性]]」の高い商品に分類される。', //p63
                        '財形貯蓄は、「安全性」の高い商品のうち[[積立型]]に分類される。', //p63
                        '定額貯金は、「安全性」の高い商品のうち[[据置型]]に分類される。', //p63
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品のリスク"
                    :relatedProblems="['2024a6', '2024a17', '2024b6', '2024c6']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
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
                    :relatedProblems="['2024a7', '2024b8', '2024c7']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        '近所付き合いの費用・趣味や「生きがい」のための費用など「定年によって発生する支出」もあるので、生活費（消費部分）は[[極端に少なくなることはない]]。', //p73
                        '[[平均余命に10年を加算する]]などお客さまが長生きに対する不安を感じないように、必要年数を設定する必要がある。', //p73
                        '40歳から50歳代前半の場合 → 退職を間近に控えている場合', //p73
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の資金運用"
                    :relatedProblems="['2024a8', '2024b17', '2024c18']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        '正しい',
                        '生活資金 → 予備資金', //p79
                        '予備資金 → 生活資金', //p79
                        '老後の資金運用は、基本的に「[[安全性]]」が原則である。老後資金の運用は「収益性」「安全性」に「流動性」も加えたマネーマネジメントだけでなく、万一の入院等のために「リスクマネジメント」を十分考慮した[[バランスの良いマネーポートフォリオ]]が重要となる。', //p79
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の保障"
                    :relatedProblems="['2024a9', '2024b9', '2024c9']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        '高齢者の医療費自己負担が増える傾向にあるので、生命保険会社の[[医療保険などによる医療保障の充実]]が必要になる。', //p80
                        '夫の生命保険の家族特約として妻の医療保障を確保している場合、夫の死亡時に妻の医療保障がなくなる可能性があるため、[[妻の医療保障を単体で準備するのが望ましい]]。', //p80
                        '正しい',
                        '公的介護保険にも[[1割（一定以上所得のある人は2割または3割）]]の自己負担があるため、日常生活を営むうえで経済的負担が大きい。', //p80
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の計算手順"
                    :relatedProblems="['2024a10', '2024b10', '2024c10']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        '相続財産評価額の合計額から、非課税財産・葬式費用・債務を差し引き、相続開始前[[7年]]以内の贈与財産を加算して課税価格合計額を算出する。', //p94
                        '課税価格合計額から遺産に係る基礎控除（[[3,000万円]] + [[600万円]] × 法定相続人の数）を行い算出する。', //p94
                        '正しい',
                        '相続税総額に各人が[[実際に相続した財産の課税価格]]の割合を乗じて算出する。', //p94
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法"
                    :relatedProblems="['2024a11', '2024b11', '2024c11']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        '保険業務や保険契約に関する法律は「保険監督法」と「保険取引法」に大別できるが、保険監督法に[[保険業法]]が含まれ、保険取引法に[[民法と保険法]]が関係する。', //p114
                        '正しい',
                        '保険契約の内容や効力に関する法律は、[[民法と保険法]]が中心になるが、実際の保険契約の詳細は保険約款の定めによる。', //p114
                        '保険業法は、[[保険事業にのみ]]認められる相互会社について、その組織・運営に関する規定を定めている。', //p114
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険募集と禁止行為"
                    :relatedProblems="['2024a12', '2024b12', '2024c12']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        '「事実と異なる説明による募集」に[[該当する]]。', //p129
                        '「不実告知の教唆」に[[該当する]]。', //p131
                        'お客さまに不利益となる事実を告げ、かつ、お客さまからの確認印を取り付ける等の方法により顧客が不利益となる事実を了知した旨を十分確認している場合は、「不当な乗換募集」に[[該当しない]]。', //p134
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融ビッグバンによる金融システムの規制緩和後の資産運用"
                    :relatedProblems="['2024a13', '2024b13', '2024c13']"
                    :contents="[
                        // rev: 2026-05-30 確認済み
                        '金融システムの規制緩和により、「外為の規制[[緩和]]」「金融機関の垣根の[[撤廃]]」「外国資本の[[参入]]」、そして「金融新商品の登場」など、金融業界は大変革を遂げた。', //p4
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="ライフステージ別のプランニング"
                    :relatedProblems="['2024a14', '2024b14', '2024c14']"
                    :contents="[
                        // rev: 2026-05-30 確認済み
                        '正しい',
                        '人生の３大支出である「教育資金」「住宅資金」「老後生活資金」のうち、[[教育資金と住宅資金]]は、マネーポートフォリオの中心となる。', //p23
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローンの返済方法"
                    :relatedProblems="['2024a15', '2024c3']"
                    :contents="[
                        // rev: 2026-05-30 確認済み
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
                    questionTitle="独立行政法人住宅金融支援機構（「機構」）"
                    :relatedProblems="['2024a16', '2024b15', '2024c4']"
                    :contents="[
                        // rev: 2026-05-30 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '「機構」が行う「財形住宅融資」の融資額は財形貯蓄残高の[[10倍]]の額（最高[[4,000万円]]）までで、住宅取得価額（リフォーム融資は住宅改良価額）の[[90％]]が限度である。', //p41
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品のリスク"
                    :relatedProblems="['2024a6', '2024a17', '2024b6', '2024c6']"
                    :contents="[
                        // rev: 2026-05-29 確認済み
                        '正しい',
                        '貨幣価値の上昇 → 貨幣価値の下落', //p67
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後生活設計の医療費等"
                    :relatedProblems="['2024a18', '2024b35', '2024c8']"
                    :contents="[
                        // rev: 2026-05-30 確認済み
                        '正しい',
                        '正しい',
                        '高い方の額 → 低い方の額', //p76
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険を活用した相続対策"
                    :relatedProblems="['2024a19', '2024b19', '2024c19']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '遺留分相当額未満 → 遺留分相当額以上', //p99
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法に定める不適切な説明と不適切な行為"
                    :relatedProblems="['2024a20', '2024b20', '2024c20']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '間接的な表現や身振り手振りも退去すべき旨の意思表示に含まれる', //p142
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融サービス提供法"
                    :relatedProblems="['2024a21', '2024b21', '2024b48', '2024c21']"
                    :contents="[
                        '正しい',
                        'その他の保険種類は対象外 → 全ての保険種類が対象', //p143
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="特定保険契約"
                    :relatedProblems="['2024a22', '2024c22']"
                    :contents="[
                        '保険法 → 保険業法', //p146
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）"
                    :relatedProblems="['2024a23', '2024b49', '2024c23']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '拒むことはできない → 拒むことができる免責規定を設けている', //p162
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険相談所・裁定審査会"
                    :relatedProblems="['2024a24', '2024b24', '2024c35']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '訴訟等を提起することはできない → 提起することができる', //p171
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="キャッシュフロー表の作成"
                    :relatedProblems="['2024a25', '2024b25', '2024c25']"
                    :contents="[
                        '可処分所得',
                        '税金や社会保険料',
                        '基本生活費',
                        '運用利率',
                        '物化変動率', // 問25〜29
                    ]"
                    :labels="[
                        'ケ', //25
                        'エ', //26
                        'カ', //27
                        'イ', //28
                        'キ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="ローン金利の種類"
                    :relatedProblems="['2024a30', '2024b3', '2024c15']"
                    :contents="[
                        '2',
                        '5',
                        '元金',
                        '変動金利型',
                        '短い', // 問30〜34
                    ]"
                    :labels="[
                        'エ', //30
                        'オ', //31
                        'キ', //32
                        'コ', //33
                        'ア', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="保険業法の主要内容"
                    :relatedProblems="['2024a35']"
                    :contents="[
                        '損害保険業',
                        '公正',
                        '公衆の縦覧',
                        'ソルベンシー・マージン比率',
                        '支払余力', // 問35〜39
                    ]"
                    :labels="[
                        'ク', //35
                        'ア', //36
                        'ケ', //37
                        'エ', //38
                        'カ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問40〜49
                        {
                            questionTitle: 'リボルビング（回転信用）方式',
                            content: '正しい',
                            relatedProblems: ['2024a40', '2024b40', '2024c40'],
                        }, //40
                        {
                            questionTitle: '住宅に対する考え方',
                            content: '正しい',
                            relatedProblems: ['2024a41'],
                        }, //41
                        {
                            questionTitle: '住宅ローンの借換え',
                            content: '正しい',
                            relatedProblems: ['2024a42', '2024b42', '2024c42'],
                        }, //42
                        {
                            questionTitle: 'キャッシュフロー表の変動要素',
                            content: '正しい',
                            relatedProblems: ['2024a43', '2024b43', '2024c43'],
                        }, //43
                        {
                            questionTitle: 'ゆとりある老後生活費',
                            content: '正しい',
                            relatedProblems: ['2024a44', '2024b44', '2024c44'],
                        }, //44
                        {
                            questionTitle: '高齢者医療制度',
                            content: '費用の1割（現役並み所得者も同様） → 費用の1割、所定水準以上の所得者の場合2割（現役並みの所得者は3割）',
                            relatedProblems: ['2024a45'],
                        }, //45 p77
                        {
                            questionTitle: '相続対策のポイント',
                            content: '正しい',
                            relatedProblems: ['2024a46', '2024c30'],
                        }, //46
                        {
                            questionTitle: '2016年（平成28年）5月施行の保険業法の主な改正内容',
                            content: '了知した旨を確認いただく必要はない → 確認いただく必要がある',
                            relatedProblems: ['2024a47', '2024b46', '2024c47'],
                        }, //47 p116
                        {
                            questionTitle: '保険募集における違法行為',
                            content: '正しい',
                            relatedProblems: ['2024a48', '2024c48'],
                        }, //48
                        {
                            questionTitle: '保険法',
                            content: '遅滞の責任を負わない → 責任を負う（遅延利息の支払いなど）',
                            relatedProblems: ['2024a49', '2024c49'],
                        }, //49 p160
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.fp2025c" next-route="daigaku.fp2024b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
