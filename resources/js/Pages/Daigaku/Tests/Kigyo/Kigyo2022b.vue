<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "企業向け保険商品とコンサルティング";
const subject = "2022年度 フォームB";
const isDraft = true;
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
                    questionTitle="社団法人と財団法人"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式会社の設立"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '募集設立とは、発起人が[[一部の株式を引き受け]]、残りの株式を引き受ける者（株式引受人）を募集して会社を設立する方法である。', //p18
                        '会社法では、会社を登記するにあたり、同一商号、同一住所の会社は、[[登記することができない]]。', //p20
                        '正しい',
                        '種類株式は優先株式ともよばれ、配当や株主総会議決権等の一定の項目について、[[普通株式とは権利内容が異なる株式である]]。', //p20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="株主の権利・義務"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-01 確認済み
                        '共益権 ↔︎ 自益権', //p22
                        '株主は、会社に対して出資義務を負うが、[[会社の債権者に対して直接の責任は負わない]]。', //p23
                        '譲渡制限株式の譲渡の承認は、原則として、[[取締役会を設置しない株式会社では「株主総会」]]が、[[取締役会を設置する株式会社では「取締役会」]]が行う。', //p23
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="財務諸表分析の基礎知識"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-03 確認済み
                        'Ｐ／Ｌ（ピーエル） → Ｂ／Ｓ（ビーエス）', //p53
                        '正しい',
                        '会社法の施行に伴い配当等の剰余金の配当がいつでもできることになったため、[[貸借対照表と損益計算書だけでは株主資本の変動を表示することができなくなった]]。', //p60
                        '会社法では[[すべての株式会社について]]貸借対照表、損益計算書に加えて株主資本等変動計算書の作成を義務付けている。', //p62
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="養老保険を活用した福利厚生プランの内容と留意点"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-03 確認済み
                        '役員を被保険者に[[含めることができる]]。', //p82
                        '正しい',
                        '保険期間については、公平な条件とするため、[[「歳」満期]]とし、[[保険期間を定年に合わせる]]。', //p84
                        '他の退職金制度がある場合（生存退職金なら企業年金・特退共・中退共等、[[死亡退職金なら総合福祉団体定期保険]]や他の共済制度等）は、これらの制度と福利厚生プランとの合計額が、退職金規程に基づいて支給される退職金の範囲内である必要がある。', //p83
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '疾病その他の事由により正常に勤務または就業していない者を[[被保険者から除くことができる]]。', //p123
                        '通知文書方式 → 個々同意方式', //p125
                        '正しい',
                        '保険金の受取人の選択により、年金払特約を付加することで、[[保険金の一時受取りに代えて、全額または一部を年金で受け取ることができる]]。', //p129
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="医療保障保険（団体型）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-05 確認済み
                        '正しい',
                        '家族特約を付加することにより被保険者の範囲に配偶者および子を含めることができる（直系尊属は不可）。', //p146
                        '給付内容は、[[治療給付金 入院給付金 死亡保険金の３給付の組合せ]]で、統合給付型となっている。', //p146
                        '保険料率は治療・入院および死亡の各給付ごとに、[[性別に関係なく５歳ごと]]の年齢群団別で、かつ被保険者の人数規模に応じた料率体系となっている。', //p146
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="財形貯蓄制度に利用される保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-03 確認済み
                        '団体保険 → 個人保険', //p157
                        '保険料の払込みを停止する場合は[[「中断」]]し、その後に「再開」により保険料を払い込むことができる。', //p157
                        '正しい',
                        '年金支払開始日以後に受け取る年金は[[非課税扱いとなる]]。', //p160
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定給付企業年金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '基金型企業年金 → 規約型企業年金', //p180
                        '[[基金型企業年金]]は、母体企業から独立した法人格をもつ「[[企業年金基金]]」が主体となって運営される。', //p179
                        '正しい',
                        '生命保険会社が取り扱う商品は、[[一般勘定で運用するものと特別勘定で運用するものに分けられる]]。', //p184
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金のポータビリティ"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-05 確認済み
                        '正しい',
                        '勤続１年以上 → 勤続３年以上', //p197
                        '資格喪失した日の翌日から３ヶ月以内 → 資格喪失した日の属する月の翌月から６ヶ月以内', //p198
                        '確定拠出年金の年金資産は、[[移換時の非課税となる]]。', //p197
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="キャッシュバランスプラン"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="中小企業退職金共済制度（中退共）・特定退職金共済制度（特退共）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '正しい',
                        '同機構の人件費・管理費等は[[国の費用で運営される]]。', //p202
                        '掛金として払い込まれた金額や運用益は、[[いかなる理由があっても事業主に対して返還されない]]。', //p204
                        '中小企業退職金共済制度、確定給付企業年金制度、厚生年金基金との[[重複加入は可能である]]。', //p203
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="持分会社"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="支配関係による親会社・子会社の分類等"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-03 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '金融商品取引法の「親会社」は、[[直接、間接、名義を問わず、議決権の過半数を所有しているかどうかが基準となる]]。', //p36
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人設立時の公的資金融資と中小企業を対象とする金融機関"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-06 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '自治体の制度融資の仕組みは、[[都道府県・信用保証協会・指定金融機関の三者協調]]で、実際の融資は金融機関が行うが、融資を受けるためには、[[各地の信用保証協会]]の保証が必要となる。', //p39
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="大会社における新たな会社の機関"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="企業の事業保障対策の基礎知識"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険の税務"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-03 確認済み
                        '企業が負担する保険料（[[特約保険料を含む]]）は全額損金算入できる。', //p131
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="自社株対策の重要性"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-05 確認済み
                        '正しい',
                        '自社株以外の財産が少ない場合、[[他の相続人との間で遺産分割におけるトラブルが懸念される]]。', //p100
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体定期保険（任意加入制）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '正しい',
                        '退職者等、配偶者、子を被保険団体に含める場合には、その数は最低被保険者数には[[含めない]]。', //p135
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体信用生命保険"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定給付企業年金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '継続基準による財政検証 → [[非]]継続基準による財政検証', //p183
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="退職金・年金の基礎知識"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '公的年金には、原則として日本国内に住んでいる[[20歳以上60歳未満]]の全国民が加入対象となる国民年金と、民間企業の従業員や公務員等が対象の厚生年金保険がある。', //p168
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金基金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-04 確認済み
                        '60歳以上65歳未満の国民年金の任意加入被保険者も[[加入できる]]。', //p204
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
                    questionTitle="事業保障未整備企業への提案"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '同族会社',
                        '損金算入',
                        '死亡退職金',
                        '株主総会',
                        '議事録',
                    ]"
                    :labels="[
                        'カ', //25
                        'ケ', //26
                        'オ', //27
                        'イ', //28
                        'エ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="会社の整理"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '営業権の譲渡',
                        '所有権',
                        '裁判所',
                        '民事再生法の手続き',
                        '会社更生法による会社更生手続き',
                    ]"
                    :labels="[
                        'イ', //30
                        'キ', //31
                        'オ', //32
                        'カ', //33
                        'ウ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="確定拠出年金の運用と運用対象商品"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '自己責任',
                        '事業主',
                        '3本',
                        '3カ月',
                        '個別株式',
                    ]"
                    :labels="[
                        'ケ', //35
                        'イ', //36
                        'キ', //37
                        'オ', //38
                        'コ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-10-01 確認済み
                            questionTitle: '株式会社の機関',
                            relatedProblems: [],
                            content: '営業グループ → 経営グループ', //p17
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '資本金規模による企業の分類',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '公開会社と譲渡制限会社',
                            relatedProblems: [],
                            content: '正しい',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '中小企業を対象とする金融機関',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '中小企業を対象とする金融機関',
                            relatedProblems: [],
                            content: '正しい',
                        }, //44
                        {
                            // rev: 2026-10-05 確認済み
                            questionTitle: '簿記の基礎知識',
                            relatedProblems: [],
                            content: '簿記では２つの要素かりかたかしかたを振り分けるにあたり、左側を[[借方]]、右側を[[貸方]]としている。', //p45
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '団体定期保険（任意加入制）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //46
                        {
                            // rev: 2026-10-04 確認済み
                            questionTitle: '団体就業不能保障保険',
                            relatedProblems: [],
                            content: '保険期間内に被保険者が死亡したときに[[死亡保険金を支払う]]。', //p153
                        }, //47
                        {
                            // rev: 2026-10-05 確認済み
                            questionTitle: '団体信用生命保険',
                            relatedProblems: [],
                            content: '債務者（被保険者）が負担する保険料は、[[生命保険料控除の対象とならない]]。', //p166
                        }, //48
                        {
                            questionTitle: '退職一時金・企業年金制度に対する企業ニーズとその背景',
                            relatedProblems: [],
                            content: '', //p
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.kigyo2022a" next-route="daigaku.kigyo2022c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
