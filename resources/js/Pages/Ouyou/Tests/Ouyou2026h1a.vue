<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import QuestionTemp4 from "@/Components/QuestionTemp4.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険応用課程試験";
const subject = "2026年 4月〜7月実施 フォームA";
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
                        // rev: 2026-08-26 確認済み
                        '正しい',
                        '地震保険料控除も所得控除に[[該当する]]。', //p19
                        '70歳以上の老人扶養親族がいるときの扶養控除額は、[[同居の場合1人につき58万円、非同居の場合1人につき48万円となる]]。', //p22
                        '雇用保険の保険料も[[控除の対象となる]]。', //p27
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の申告"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-26 確認済み
                        '1月16日から2月25日まで → 2月16日から3月15日まで', //p34
                        '1500万円 → 2000万円', //p34
                        '5万円 → 20万円', //p34
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の申告手続と納付方法"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-26 確認済み
                        '正しい',
                        '6ヶ月以内 → 10ヶ月以内', //p52
                        '納付期限の3ヶ月後 → 納付期限の翌日', //p52
                        '相続税は現金で納付することが原則となっているが、延納によっても現金で納付することが困難な場合、[[相続財産で物納することができる]]', //p53
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人の住民税・事業税"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-26 確認済み
                        '個人の住民税には、[[都道府県が課税する道府県民税]]と市町村が課税する市町村民税がある。', //p62
                        '所得税の確定申告書を税務署長に提出した人は、[[住民税の申告書を提出したものとみなされる]]。', //p62
                        '市町村が課税 → 都道府県が課税', //p65
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="企業市場"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-26 確認済み
                        '資本金1億円超 → 資本金1億円以下', //p70
                        '普通法人企業には、株式会社・[[合同会社]]・合名会社・[[合資会社]]などがある。', //p71
                        '以前は、株式会社の設立には1,000万円以上の資本金が必要だったが、[[会社法の施行によりその規定がなくなった]]。', //p71
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税の基礎知識"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-26 確認済み
                        '公共目的で設立された公共法人には、[[法人税はかからない]]。', //p74
                        '3ヶ月以内 → 2ヶ月以内', //p75
                        '正しい',
                        '会社の課税所得は、会社の決算利益とは[[必ずしも一致しない]]。', //p76
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-26 確認済み
                        '正しい',
                        '「個人型」に加入した個人は、[[拠出限度額の範囲内]]で掛金を拠出することができる。', //p94
                        '給付には、老齢給付金、障害給付金、[[死亡一時金および脱退一時金]]がある。', //p98
                        'スイッチング → ポータビリティ', //p95
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        {
                            // rev: 2026-08-26 確認済み
                            answer: '2.64%',
                            questionTitle: '金融商品の税引き後利回り',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '1年複利なので、2年後の元利合計を求めたうえで、利息部分に20%の税金をかけます。税引き後利息を元本と期間で割ることで、税引き後利回りを求めます。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['満期時の元利合計 ＝ 元本 ×（1＋年利率）<sup>年数</sup>', '税引き後利息 ＝ 税引き前利息 − 税金', '税引き後利回り ＝ 税引き後利息 ÷ 元本 ÷ 年数 × 100'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['1,000,000円 ×（1＋0.0325）<sup>2</sup>', '＝ 1,066,056.25円', '＝ 1,066,056円（円未満四捨五入）'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['税引き前利息：1,066,056円 − 1,000,000円 ＝ 66,056円', '税金：66,056円 × 20% ＝ 13,211.2円 → 13,211円（円未満切り捨て）', '税引き後利息：66,056円 − 13,211円 ＝ 52,845円'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['52,845円 ÷ 1,000,000円 ÷ 2年 × 100', '＝ 2.64225%'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え イ．2.64%（小数第3位を四捨五入）',
                                },
                            ],
                        },
                    ]"
                    :labels="[
                        'イ', //8
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="厚生年金保険（被用者年金）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-26 確認済み
                        '80歳 → 70歳', //p137
                        '正しい',
                        '厚生年金保険の保険料は事業主と従業員（被保険者本人）で[[1/2ずつ負担する]]。', //p137
                        '子が3歳になるまでの期間を最長として、[[申請により免除される制度がある]]。', //p137
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度の障害給付と遺族給付の内容"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-26 確認済み
                        '正しい',
                        '対象が狭くなっている → 対象が幅広くなっている', //p144
                        '1/4 → 2/3', //p143
                        '遺族基礎年金の受給額は、加入期間にかかわらず定額であり、[[子の人数に応じて加算額が上乗せされる]]。', //p144
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="募集時の正しい説明"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-26 確認済み
                        '公平性の原則 → 適合性の原則', //p166
                        '正しい',
                        '法定代理人(親権者または未成年後見人）の同意が[[必要]]。', //p168
                        '保険契約締結後 → 保険契約締結前', //p168
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="解約手続きの留意点"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-26 確認済み
                        '解約請求ができるのは[[契約者]]のみである。', //p174
                        '解約理由によっては、[[解約せずに別の方法で対処できる場合があることを案内する]]ことが大切である。', //p175
                        '正しい',
                        '解約によるデメリットについて[[お客様にお伝えする必要がある]]。', //p175
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得の種類"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-26 確認済み
                        '正しい',
                        '正しい',
                        '1/3 → 1/2', //p17
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の課税財産と非課税財産"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-26 確認済み
                        '正しい',
                        '相続財産に特許権、営業権も[[含まれる]]。', //p42
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続対策"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-26 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '[[遺言は原則的に法定相続の規定に優先する]]効力をもっている', //p55
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-26 確認済み
                        '正しい',
                        '正しい',
                        '贈与を受けた年の翌年2月1日から4月15日まで → 贈与を受けた年の翌年2月1日から3月15日まで', //p57
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約形態による課税関係"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-26 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '雑所得 → 一時所得', //p59
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人の住民税・事業税"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-26 確認済み
                        '正しい',
                        '法人の住民税は、法人の所得に関係なく法人の規模に応じて決められる「均等割」と[[法人税額に応じて課せられる「法人税割」]]で構成されている。', //p79
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="経営者保険の税務"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-26 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '一時所得 → 退職所得', //p112
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険の税務"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-26 確認済み
                        '企業が負担した保険料全額を[[損金算入（個人企業の場合は必要経費に算入）できる]]。', //p86
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="勤労者財産形成制度（財形制度）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-26 確認済み
                        '正しい',
                        '一律30% → 一律20%', //p117
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="金利"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-26 確認済み
                        '借りたい人が多ければ金利は[[上昇]]し、貸したい人が多ければ金利は[[低下]]する。', //p127
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険募集人が遵守すべき法令等（保険業法）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-26 確認済み
                        '正しい',
                        '正しい',
                        '媒介 → 代理', //p149
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
                        // rev: 2026-08-26 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '金融庁 → 生命保険会社', //p172
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="国民年金（基礎年金）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '20歳',
                        '70歳',
                        '第１号',
                        '給与（賞与）からの天引き',
                        '国庫負担', // 問25〜29
                    ]"
                    :labels="[
                        'ク', //25
                        'ケ', //26
                        'ウ', //27
                        'カ', //28
                        'イ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="募集上の禁止行為"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '虚偽の説明',
                        '虚偽告知教唆',
                        '団体',
                        '威迫',
                        '誹謗・中傷', // 問30〜34
                    ]"
                    :labels="[
                        'キ', //30
                        'ウ', //31
                        'ケ', //32
                        'ク', //33
                        'オ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="相続税額の計算"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '10,400',
                        '8,300',
                        '5,768',
                        '1,499',
                        '1,201', // 問35〜39
                    ]"
                    :labels="[
                        'コ', //35
                        'キ', //36
                        'オ', //37
                        'ウ', //38
                        'イ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-08-26 確認済み
                            questionTitle: '国税と地方税',
                            relatedProblems: [],
                            content: '国税は、所得税、法人税などの[[直接税]]、消費税、酒税などの[[間接税]]とに分けられる。', //p14
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '所得税の税額控除',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '経営者保険の販売活動',
                            relatedProblems: [],
                            content: '正しい',
                        }, //42
                        {
                            // rev: 2026-08-26 確認済み
                            questionTitle: '医療保障保険（団体型）',
                            relatedProblems: [],
                            content: '5年更新 → 1年更新', //p120
                        }, //43
                        {
                            // rev: 2026-08-26 確認済み
                            questionTitle: '固定金利商品と変動金利商品',
                            relatedProblems: [],
                            content: '金利が今後上昇しそうな場合には[[変動金利商品]]が有利となり、逆に金利が今後下降しそうな場合には、[[固定金利商品]]が有利となる。', //p130
                        }, //44
                        {
                            // rev: 2026-08-26 確認済み
                            questionTitle: 'コンプライアンス',
                            relatedProblems: [],
                            content: 'コンプライアンスとは、一般に「法令等の遵守」と訳されており、多くの企業では、[[法令や社内ルールだけでなく、社会的規範や企業倫理を守る]]ということも含めて用いられている。', //p147
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '消費者契約法',
                            relatedProblems: [],
                            content: '正しい',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '個人情報の保護に関する法律（個人情報保護法）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            // rev: 2026-08-26 確認済み
                            questionTitle: '犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）',
                            relatedProblems: [],
                            content: '100万円 → 200万円', //p157
                        }, //48
                        {
                            // rev: 2026-08-26 確認済み
                            questionTitle: '適切な保険金・給付金等の支払い',
                            relatedProblems: [],
                            content: 'モラルリスク対策の強化を図るために、生命保険協会では、主として契約引受時の対策として管理・運営してきた[[「契約内容登録制度」「契約内容照会制度」に加え]]、2005年（平成17年）から「[[支払査定時照会制度]]」を管理・運営している。', //p172
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons next-href="/ouyou/2026-h1-b" home-route="ouyou.index" />
        </section>
    </SeihoTestLayout>
</template>
