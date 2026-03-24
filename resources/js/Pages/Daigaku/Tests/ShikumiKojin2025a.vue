<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import QuestionTemp4 from "@/Components/QuestionTemp4.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険のしくみと個人保険商品";
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
                    questionTitle="保険者"
                    :contents="[
                        '保険業法 → 保険法', //p3
                        '登録 → 免許', //p3
                        '免許 → 登録', //p3
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="前納・一括払と一時払"
                    :contents="[
                        'いずれも月払契約の場合 → 一括払の月払契約の場合', //p21
                        '正しい',
                        '全期前納保険料 ↔︎ 一時払保険料', //p22
                        '一時払保険料 ↔︎ 全期前納保険料', //p22
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金の支払い"
                    :contents="[
                        '再指定されるまで保険金は支払わない → 死亡した保険金受取人の法定相続人に支払う', //p22
                        '災害死亡宣告 → 認定死亡', //p22
                        '正しい',
                        '保険期間満了後 → 保険期間中', //p24
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の解除・解約・取消し・無効"
                    :contents="[
                        '解約させる → 消滅させる', //p39
                        '保険業法および定款 → 保険法および保険約款', //p40
                        '正しい',
                        '一方的に行うことは不可能 → 一方的に行うことが可能<br>同意が必要 → 同意は不要', //p42
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択の手段"
                    :contents="[
                        '一般臨床と同様 → 一般臨床と異なる', //p63
                        '危険選択の手段として成立しない → 成立する', //p64
                        '個別方式のみ → 一括方式も認められている', //p63
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="超過危険の種類"
                    :contents="[
                        '平坦な曲線をを描く → さまざまな形の曲線を描く', //p73
                        '胃切除 → 高血圧', //p73
                        '正しい',
                        '妊娠 → 胃切除などの手術', //p73
                    ]"
                />
                <QuestionTemp4
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        {
                            answer: '892,538円',
                            questionTitle: '保険料の現価',
                            explanation: [
                                {
                                    type: 'blockTitle',
                                    value: '■ 解答のポイント',
                                },
                                {
                                    type: 'text',
                                    value: '将来受け取る金額の現価は、利率を用いて現在価値に割り引いて求める。',
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 使用する公式',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['現価 ＝ 将来価値 ÷（1 ＋ 利率）<sup>年数</sup>'],
                                },
                                {
                                    type: 'blockTitle',
                                    value: '■ 計算方法',
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['将来価値：100万円', '利率：2.3%（＝ 0.023）', '期間：5年'],
                                },
                                {
                                    type: 'formulaBlock',
                                    value: ['現価', '= 1,000,000 ÷ （1 ＋ 0.023）<sup>5</sup>', '≒ 892,538'],
                                },
                                {
                                    type: 'result',
                                    value: '▶ 答え 892,538円（円未満を四捨五入）',
                                },
                            ],
                        },
                    ]"
                    :labels="[
                        'ア', //7
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="保障見直しに関する諸制度"
                    :contents="[
                        '転換前契約加入時 → 転換時<br>保険料率は引上げになることはない → 引き上げとなる場合がある', //p121
                        '転換前契約の責任開始日 → 転換契約の責任開始日', //p121
                        '診査は不要 → 診査は必要<br>契約時年齢で計算 → 手続時の年齢で計算', //p120
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="（自動）振替貸付および契約者貸付"
                    :contents="[
                        '保険約款に規定がない契約 → 保険約款に規定がある契約のみ', //p112
                        '経過期間に関わらず → 猶予期間満了後一定期間内の場合', //p112
                        '保険金額を上限 → 解約返戻金の所定の範囲内', //p112
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産形成を目的とした主契約"
                    :contents="[
                        '被保険者が生存している限り → 生死に関係なく<br>残りの保証期間に対する年金や一時金は支払わない → 遺族に支払う', //p145
                        '保険料免除機能が適用される → 保険料免除機能はない', //p146
                        '正しい',
                        '最低保証がないタイプのみ → 最低保証がないタイプと一定額保証するタイプがある', //p147
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済制度の特徴"
                    :contents="[
                        '一切認めていない → 一定の条件を満たしたら加入を認める団体がある', //p164
                        '営利を目的とする → 営利を目的としてはならない', //p165
                        '正しい',
                        '多くの共済種類を取り扱う → 共済種類が限られている', //p165
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済事業とその商品"
                    :contents="[
                        '正しい',
                        '農業協同組合が単独 → 農業協同組合と全国共済農業協同組合連合会の2組織', //p166
                        '10年タイプ → 1年タイプ', //p179
                        '年齢による区分のない → 年齢により保証が分かれている', //p185
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険法に基づく被保険者の同意"
                    :contents="[
                        '被保険者の同意が必要 → 同意は不要', //p5
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="クーリング・オフ（契約撤回請求権）"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '保険期間が3年以上 → 保険期間が1年以下', //p8
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の失効・復活"
                    :contents="[
                        '正しい',
                        '解約返戻金の請求権は消滅する → 存続する', //p35
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務違反による保険契約の解除"
                    :contents="[
                        '正しい',
                        '正しい',
                        '第1回保険料相当額 → 解約返戻金', //p40
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択の実際"
                    :contents="[
                        '募集人確認 → 第一次選択', //p59
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="選択効果の検証等"
                    :contents="[
                        '正しい',
                        '予定死亡率 → 実際死亡率', //p70
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金発生の仕組みと配当金との関係"
                    :contents="[
                        '正しい',
                        '実際死亡率 ÷ 予定死亡率 × 危険保険金 → （予定死亡率 - 実際死亡率）× 危険保険金', //p103
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当の種類"
                    :contents="[
                        '正しい',
                        '正しい',
                        '丸2年 → 丸1年', //p105
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当金の支払方法（毎年配当型）"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '毎年の契約応当日に支払わない → 契約応当日に現金で支払う', //p109
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="特定疾病保障保険（三大疾病保障保険）"
                    :contents="[
                        '正しい',
                        '高度障害保険金は一切支払われない → 支払うタイプと支払わないタイプがある', //p137
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院、手術、通院など病気・ケガの治療全般に備える特約"
                    :contents="[
                        '正しい',
                        '災害入院特約 → 家族型入院特約', //p157
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="損害保険"
                    :contents="[
                        '正しい',
                        '正しい',
                        '所得補償保険 → 費用保険', //p203
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="保険法と生命保険契約の形態"
                    :contents="[
                        '傷害疾病定期保険契約',
                        '不利',
                        '片面的強行規定',
                        '自己のためにする',
                        '自己の生命', // 問25〜29
                    ]"
                    :labels="[
                        'イ', //25
                        'ウ', //26
                        'カ', //27
                        'ケ', //28
                        'コ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="生命保険会社の免責事由"
                    :contents="[
                        '保険法',
                        '信義誠実の原則',
                        '全保険期間',
                        '死亡させる意思',
                        'は含まれない', // 問30〜34
                    ]"
                    :labels="[
                        'カ', //30
                        'イ', //31
                        'ク', //32
                        'オ', //33
                        'ケ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="解約返戻金の仕組み"
                    :contents="[
                        '毎決算期',
                        '保険料積立金',
                        '経過年数',
                        '控除した',
                        'キャッシュバリュー', // 問35〜39
                    ]"
                    :labels="[
                        'ク', //35
                        'ウ', //36
                        'オ', //37
                        'イ', //38
                        'コ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問40〜49
                        { questionTitle: '生命保険契約の形態', content: '正しい' }, //40
                        { questionTitle: '保険契約の解除請求', content: '保険者 → 保険契約者' }, //41 p43
                        { questionTitle: '保険契約の解除・解約・取消し・無効', content: '保険料不可分の原則が採用されている → 採用されていない<br>保険契約者に支払わないと規定 → 支払うと規定' }, //42 p44
                        { questionTitle: '危険選択の意義', content: '正しい' }, //43
                        { questionTitle: '重複加入の有無', content: '契約内容募集制度 →契約内容照会制度<br>支払査定時登録制度で登録 → 支払査定時照会制度で照会' }, //44 p57
                        { questionTitle: '超過危険の種類', content: '正しい' }, //45
                        { questionTitle: '死亡率と生存率の関係', content: '正しい' }, //46
                        { questionTitle: '平均寿命・平均余命', content: '平均寿命 ↔︎ 平均余命' }, //47 p79
                        { questionTitle: '利率変動型積立終身保険（アカウント型保険）', content: '無告知で → 告知が必要' }, //48 p137
                        { questionTitle: '特定疾病や損傷の治療に備える特約', content: '正しい' }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons next-route="daigaku.shikumi-kojin2025b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
