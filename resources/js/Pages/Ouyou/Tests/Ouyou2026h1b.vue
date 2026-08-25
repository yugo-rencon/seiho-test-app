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
const subject = "2026年 4月〜7月実施 フォームB";
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
                    questionTitle="所得の種類"
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
                    questionTitle="契約形態による課税関係"
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
                    questionTitle="法人税の基礎知識"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-26 確認済み
                        '正しい',
                        '公共目的で設立された公共法人には、[[法人税はかからない]]。', //p74
                        '3ヶ月以内 → 2ヶ月以内', //p75
                        '会社の課税所得は、会社の決算利益とは[[必ずしも一致しない]]。', //p76
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人の住民税・事業税"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="勤労者財産形成制度（財形制度）"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
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
                    questionTitle="生命保険募集人が遵守すべき法令等（保険業法）"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金等の請求と支払い"
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
                    questionTitle="解約手続きの留意点"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の所得控除"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-26 確認済み
                        '正しい',
                        '70歳以上の老人扶養親族がいるときの扶養控除額は、[[同居の場合1人につき58万円、非同居の場合1人につき48万円となる]]。', //p22
                        '正しい',
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
                        '正しい',
                        '', //p
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
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人の住民税・事業税"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-26 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '個人事業主本人を被保険者 → 使用人を被保険者', //p67
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="企業市場"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-26 確認済み
                        '正しい',
                        '正しい',
                        '以前は、株式会社の設立には1,000万円以上の資本金が必要だったが、[[会社法の施行によりその規定がなくなった]]。', //p71
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
                        '', //p
                        '正しい',
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
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定給付企業年金制度"
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
                    questionTitle="確定給付企業年金の税務"
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
                    questionTitle="厚生年金保険（被用者年金）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度の障害給付と遺族給付の内容"
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
                    questionTitle="法令上の禁止行為"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
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
                    questionTitle="金利の決まり方"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '利息（価格）',
                        '低',
                        '上昇',
                        '日本銀行',
                        '市場金利', // 問30〜34
                    ]"
                    :labels="[
                        'ケ', //30
                        'コ', //31
                        'キ', //32
                        'ア', //33
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
                        '10,300万円',
                        '7,200万円',
                        '4,810万円',
                        '1,202万円',
                        '952万円', // 問35〜39
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
                            questionTitle: '国税と地方税',
                            relatedProblems: [],
                            content: '', //p
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '所得税の税額控除',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '同族会社',
                            relatedProblems: [],
                            content: '', //p
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '医療保障保険（団体型）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '複利型商品',
                            relatedProblems: [],
                            content: '', //p
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'コンプライアンス',
                            relatedProblems: [],
                            content: '正しい',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '消費者契約法',
                            relatedProblems: [],
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '保険法',
                            relatedProblems: [],
                            content: '', //p
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '銀行窓販の弊害防止措置',
                            relatedProblems: [],
                            content: '正しい',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '失効（復活）手続きの留意点',
                            relatedProblems: [],
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons next-href="/ouyou/2025-h1-b" home-route="ouyou.index" />
        </section>
    </SeihoTestLayout>
</template>
