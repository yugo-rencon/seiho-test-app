<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険応用課程試験";
const subject = "2021年度 4月〜7月実施 フォームA";
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
                    questionTitle="所得税の所得控除"
                    :relatedProblems="[]"
                    :contents="[
                        '雇用保険の保険料も控除の対象', //p27
                        '合計所得金額が2000万円以下 → 1000万円以下', //p20
                        '同居・非同居にかかわらず1人につき38万円 → 同居の場合1人につき58万円、非同居の場合1人につき48万円', //p22
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の申告"
                    :relatedProblems="[]"
                    :contents="[
                        '1月16日から2月25日まで → 2月16日から3月15日まで', //p34
                        '正しい',
                        '10万円 → 20万円', //p34
                        'あらかじめ税務署長の承認を受けなくても利用できる → あらかじめ税務署長の承認を受ける必要がある', //p35
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の申告手続と納付方法"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '6ヶ月以内 → 10ヶ月以内', //p52
                        '各相続人が個別に申告書を作成し、各相続人の居住地の所轄税務署長に提出 → 相続人が共同して申告書を作成し、被相続人の死亡時の居住地の所轄税務署長に提出', //p52
                        '申告書の提出期限の翌月末日まで → 申告書の提出期限まで', //p52
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            questionTitle: '相続時精算課税制度選択による贈与税額',
                            relatedProblems: [],
                            content: '贈与税額 = （基礎控除後の課税価格 - 2,500万円） × 20% より[[「ウ」]]が正しい', //p56
                        }, //4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人の住民税・事業税"
                    :relatedProblems="[]"
                    :contents="[
                        '都道府県民分と市町村民分を合わせて、道府県民税として課税 → 都道府県が課税する道府県民税と市町村が課税する市町村民税がある', //p79
                        '法人の所在地に応じて課せられる「地域割」 → 法人税額に応じて課せられる「法人税割」', //p79
                        '正しい',
                        '保険料や掛金を損金算入することはできない → 保険料や掛金を損金算入することができる', //p80
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '5年 → 1年', //p83
                        '統一保険料率 → 平均保険料率', //p84
                        '特約を付加することなく、業務上や業務外のあらゆる災害、疾病による死亡を保障する', //p86
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金の税務"
                    :relatedProblems="[]"
                    :contents="[
                        '所得控除の対象とはならない → 全額所得控除（小規模企業共済等掛金控除）の対象', //p98
                        '損金算入できない → 全額損金算入となる', //p98
                        '雑所得として所得税の課税対象 → 退職所得として所得税の課税対象', //p99
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定給付企業年金の税務"
                    :relatedProblems="[]"
                    :contents="[
                        '加入者個人の拠出がある場合は生命保険料控除（一般生命保険料控除）の対象となる', //p102
                        '企業の拠出した掛金額は損金算入することができる', //p102
                        '正しい',
                        '一時所得として所得税の課税対象 → 所得税は非課税で相続税の課税対象', //p102
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="勤労者財産形成制度（財形制度）"
                    :relatedProblems="[]"
                    :contents="[
                        '4つ → 3つ（一般財形貯蓄制度、財形住宅貯蓄制度、財形年金貯蓄制度）', //p117
                        '正しい',
                        '経過期間にかかわらず自ら解約し他の金融機関の一般財形へ預け替えることはできない → 3年以上の期間にわたり有していた一般財形については、自ら解約し他の金融機関の一般財形へ預け替えることができる', //p117
                        '多くの個人保険商品と同様、積立金等の計算の基礎（予定利率）は固定しており、変更されることはない → 多くの個人保険商品と異なり、積立金等の計算の基礎（予定利率）は変更される場合がある', //p117
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="金利"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '3年 → 1年', //p128
                        'お客さまにとって金利が今後上昇しそうな場合には[[変動金利商品]]が有利', //p130
                        '1年複利よりも半年複利、半年複利よりも1ヶ月複利のほうが元利合計が大きくなる', //p131
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="厚生年金保険（被用者年金）"
                    :relatedProblems="[]"
                    :contents="[
                        '1/3 → 1/2', //p137
                        '正しい',
                        '負担すべき保険料は、被保険者の「標準報酬月額」[[「標準賞与額」]]に所定の保険料率を乗じて算出する', //p137
                        '子が[[3歳]]になるまでの期間を最長として、申請により免除される制度がある', //p137
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="解約手続きの留意点"
                    :relatedProblems="[]"
                    :contents="[
                        '解約請求できるのは契約者と被保険者 → 契約者のみ<br>契約者・被保険者の意思確認 → 契約者の意思確認', //p174
                        '解約理由によっては、解約せずに別の方法で対処できる場合があることを案内することが大切', //p175
                        '解約によるデメリットについてお客様にお伝えする必要がある', //p175
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得の種類"
                    :relatedProblems="[]"
                    :contents="[
                        '収入金額は必ずしも金銭で支給されたものに限らず、一般に現物給与といわれている物品やその他の経済的利益も含まれる', //p15
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税"
                    :relatedProblems="[]"
                    :contents="[
                        '5年 → 3年', //p44
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '一度適用すると、選択した親や祖父母からの贈与については、暦年課税に変更できない', //p57
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人の住民税・事業税"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '保険料は事業の必要経費とはならず、[[生命保険料控除の対象になる]]', //p67
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険の税務"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '事業年度の翌年度に益金に算入 → 事業年度の益金に算入', //p87
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金制度"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        'スイッチング → ポータビリティ', //p95
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定給付企業年金制度"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '年金規約に一時金との選択支給を定めることもできる', //p101
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="経営者保険の販売活動"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '保険料のうち[[定期保険部分、特約部分は損金算入できる]]', //p115
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金（基礎年金）"
                    :relatedProblems="[]"
                    :contents="[
                        '20歳未満または60歳以上の被用者年金（厚生年金保険）制度の加入者も対象に含まれる', //p136
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険募集人が遵守すべき法令等（保険業法）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '保険契約締結に関して「媒介」するか「代理」をするのかを[[明示しなければならない]]', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="募集時の正しい説明"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '加齢に伴う認知能力等の低下や「意思能力」が十分かどうか確かめる[[必要がある]]', //p168
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金等の請求と支払い"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '保険事故に関する情報は、[[特にセンシティブな個人情報]]', //p173
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="相続税の課税財産と非課税財産"
                    :relatedProblems="[]"
                    :contents="[
                        '社会政策',
                        '借地権',
                        'みなし相続',
                        '3',
                        '500', // 問25〜29
                    ]"
                    :labels="[
                        'ウ', //25
                        'オ', //26
                        'エ', //27
                        'キ', //28
                        'ケ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="公的年金制度の老齢給付の内容"
                    :relatedProblems="[]"
                    :contents="[
                        '保険料納付済',
                        '裁定請求',
                        '減額',
                        '増額',
                        '20', // 問30〜34
                    ]"
                    :labels="[
                        'オ', //30
                        'イ', //31
                        'ウ', //32
                        'エ', //33
                        'コ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="所得税の税額の計算過程"
                    :relatedProblems="[]"
                    :contents="[
                        '565',
                        '15',
                        '90',
                        '48',
                        '19.35', // 問35〜39
                    ]"
                    :labels="[
                        'コ', //35
                        'ア', //36
                        'ク', //37
                        'カ', //38
                        'イ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問40〜49
                        {
                            questionTitle: '所得税の税額控除',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '年金受給権の評価',
                            relatedProblems: [],
                            content: 'まだ給付事由が発生していない生命保険契約の年金受給権は、[[個々の契約に係る解約返戻金の額を用いて評価される]]', //p45
                        }, //41
                        {
                            questionTitle: '相続税の未成年者控除',
                            relatedProblems: [],
                            content: '3万円 → 10万円', //p48
                        }, //42
                        {
                            questionTitle: '総合福祉団体定期保険への特約付加',
                            relatedProblems: [],
                            content: '特約の付加に際しては[[被保険者の同意が必要]]', //p85
                        }, //43
                        {
                            questionTitle: '経営者保険の販売活動',
                            relatedProblems: [],
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '市場（自由）金利と規制金利',
                            relatedProblems: [],
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '公的年金（障害年金）の障害認定の要件',
                            relatedProblems: [],
                            content: '障害認定日に、[[国民年金の場合は障害等級1級・2級]]、[[厚生年金保険の場合は1級・2級・3級]]の状態にあること', //p142
                        }, //46
                        {
                            questionTitle: '特定保険契約',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '犯罪収益移転防止法',
                            relatedProblems: [],
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '失効（復活）手続きの留意点',
                            relatedProblems: [],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-href="/ouyou/2022-h2-d" next-href="/ouyou/2021-h1-b" home-route="ouyou.index" />
        </section>
    </SeihoTestLayout>
</template>
