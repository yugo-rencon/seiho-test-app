<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "ファイナンシャルプラニングとコンプライアンス";
const subject = "2026年度 フォームB";
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
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '必要に応じて、[[弁護士、税理士、不動産の専門家などの協力を得ながら]]、お客さまの総合的な資産設計を行い、その実行の手助けをすることを主たる職務とする。', //p1
                        'お客さまのニーズに十分に応えることが[[難しくなってきた]]からである。', //p2
                        'ＦＰが近年注目されるようになった背景には、①[[個人]]の金融資産の増大、[[②金融の自由化]]、③急速な高齢社会の進展等があげられる。', //p2
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="ライフプランニングの基礎"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '生保FPが決めていく姿勢 → 生保FPがお客さまの希望を聞き出す姿勢', //p6
                        '[[ライフサイクル表]]の作成は、お客さまのライフプランニングを行ううえでの第一歩であり、次に作成する[[キャッシュフロー表]]の前提となる。', //p6
                        '将来の変動要素をキャッシュフロー表の記載期間である30年〜50年にわたって予測することは[[ほとんど不可能に近い]]ため、[[定期的なメンテナンスが重要]]となってくる。', //p9
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローンの返済方法"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローンの種類"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '有担保ローンの方が無担保ローンよりも金利は[[低くなっている]]。', //p34
                        '正しい',
                        'ローン契約の締結やカードの発行にあたっては、[[無担保・有担保を問わず、金融機関の審査がある]]。', //p34
                        '使途が制限されていないローンほど金利は[[高く]]なるといえる。', //p34
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="住宅取得資金計画"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
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
                    questionTitle="資金運用の３要素による金融商品の分類"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        'ＭＲＦは、「[[流動性]]」の高い商品に分類される。', //p63
                        '財形貯蓄は、「安全性」の高い商品のうち[[積立型]]に分類される。', //p63
                        '定額貯金は、「安全性」の高い商品のうち[[据置型]]に分類される。', //p63
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡保険金の活用方法等"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '万一のことが起こったら迅速に手続きをするのは当然として、[[保険金の運用についてお客さまのためになる有効なアドバイスをするのが生保ＦＰの重要な役割]]になる。', //p84
                        '死亡保険金は残された家族の生活を支えるものであり、[[生活設計にあわせて安全・確実・有利に運用しなければならない]]。', //p84
                        '正しい',
                        '遺族基礎年金の受給者である被保険者の妻に該当する場合、資産運用に[[障害者等のマル優・特別マル優の非課税の枠が利用できる]]。', //p86
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の資金運用"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
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
                    questionTitle="相続税の計算手順"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
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
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '保険監督法に[[保険業法]]が含まれ、保険取引法に[[民法と保険法]]が関係する。', //p114
                        '正しい',
                        '保険契約の内容や効力に関する法律は、[[民法と保険法]]が中心になるが、実際の保険契約の詳細は保険約款の定めによる。', //p114
                        '保険業法は、[[保険事業にのみ]]認められる相互会社について、その組織・運営に関する規定を定めている。', //p114
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法に定める不適切な説明と不適切な行為"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険販売等に関する法律"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融システムの規制緩和後の資産運用"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
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
                    questionTitle="リスクマネジメント"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '生命保険だけ → 生命保険と損害保険', //p16
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="ライフステージ別のプランニング（50歳代既婚者）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '厚生年金保険のモデル年金額（含む妻の国民年金受給額）は、「ゆとりある老後生活費」の額を[[下回っている]]。', //p31
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローン金利の種類"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '固定金利型ローンの一種 → 変動金利型ローンの一種', //p37
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="独立行政法人住宅金融支援機構（「機構」）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        '正しい',
                        '「機構」が行う「財形住宅融資」の融資金利は、返済の開始から終了までの全期間、[[5年]]ごとに適用金利を見直す[[5年]]固定金利制である。なお、フラット35と組み合わせて[[利用することができる]]。', //p41
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品のリスクの種類"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正しい',
                        'インフレリスクとは、物価の上昇により貨幣価値が[[下落]]するリスクのことだが、長期運用では、インフレに対応できる選択肢を持つことの重要性が[[増している]]。', //p67
                        '正しい',
                        '正しい',
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
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険を活用した相続対策"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="2016年（平成28年）５月施行の保険業法の主な改正内容"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="特定保険契約"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険法"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険相談所・裁定審査会"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="教育資金設計"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '元利均等',
                        '育英年金',
                        '5,000円～10,000円',
                        '給付型',
                        '住民税非課税世帯・準ずる世帯', // 問25〜29
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
                    questionTitle="キャッシュフロー表の作成"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '可処分所得',
                        '税金や社会保険料',
                        '基本生活費',
                        '運用利率',
                        '物価変動率', // 問30〜34
                    ]"
                    :labels="[
                        'ケ', //30
                        'エ', //31
                        'カ', //32
                        'イ', //33
                        'キ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="老後生活設計の医療費等"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-24 確認済み
                        '14',
                        '20',
                        '２',
                        '標準報酬月額',
                        '生計', // 問35〜39
                    ]"
                    :labels="[
                        'エ', //35
                        'オ', //36
                        'ア', //37
                        'コ', //38
                        'ク', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-08-24 確認済み
                            questionTitle: 'リボルビング（回転信用）方式',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-24 確認済み
                            questionTitle: 'リスクマネジメント',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '教育資金設計',
                            relatedProblems: [],
                            content: '', //p
                        }, //42
                        {
                            // rev: 2026-08-24 確認済み
                            questionTitle: '中途解約リスク',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '高齢者医療制度',
                            relatedProblems: [],
                            content: '', //p
                        }, //44
                        {
                            questionTitle: '相続時精算課税制度',
                            relatedProblems: [],
                            content: '', //p
                        }, //45
                        {
                            // rev: 2026-08-24 確認済み
                            questionTitle: '生命保険会社の経営破綻時の取引制限',
                            relatedProblems: [],
                            content: '正しい',
                        }, //46
                        {
                            // rev: 2026-08-24 確認済み
                            questionTitle: '金融サービスの提供及び利用環境の整備等に関する法律（金融サービス提供法）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '保険募集における禁止行為',
                            relatedProblems: [],
                            content: '', //p
                        }, //48
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）',
                            relatedProblems: [],
                            content: '生命保険会社等の金融機関は、お客さまが取引時確認に応じない場合には応じるまでの間、取引に係る義務の履行を[[拒むことができる]]こととし、免責規定を設けている。', //p162
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons next-route="daigaku.fp2025b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
