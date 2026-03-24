<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険のしくみと個人保険商品";
const subject = "2025年度 フォームB";
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
                    questionTitle="クーリング・オフ（契約撤回請求権）"
                    :contents="[
                        '生命保険契約の申し込みは該当しない → 該当する', //p7
                        '告知をした日 → 申し込みをした日<br>早い日を含め8日以内 → 遅い日を含め8日以内', //p7
                        '正しい',
                        '保険期間が1年以下のときはクーリング・オフができる → クーリング・オフはできない', //p8
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
                    questionTitle="保険契約の失効・復活"
                    :contents="[
                        '保険契約は失効しない → 失効する', //p34
                        '翌月初日 → 翌日', //p34
                        '正しい',
                        '失効中の期間は計算対象に含まれない → 含めて計算する', //p36
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
                    questionTitle="身体的危険"
                    :contents="[
                        '痩身体 → 過軽体', //p49
                        '正しい',
                        '既往歴 → 現病歴', //p50
                        '現病歴 → 既往歴', //p50
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
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="営業保険料の構成と計算基礎"
                    :contents="[
                        '純保険料 → 付加保険料', //p89
                        '正しい',
                        '付加保険料 → 純保険料', //p89
                        '予定利率 → 予定事業費率', //p89
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
                    questionTitle="特約の種類"
                    :contents="[
                        '正しい',
                        '支払回数に最低保証はない → 最低保証がある', //p156
                        '保証は継続する → 特約は消滅する', //p156
                        '余命1年以内 → 余命6ヶ月以内', //p160
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
                    questionTitle="生命保険会社の免責事由"
                    :contents="[
                        '正しい',
                        '正しい',
                        '故意と判断され、保険金は支払われない → 故意とは判断されず、保険金が支払われる', //p27
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金の支払い"
                    :contents="[
                        '正しい',
                        '再指定されるまで保険金は支払わない → 死亡した保険金受取人の法定相続人に支払う', //p22
                        '正しい',
                        '正しい',
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
                    questionTitle="危険選択上、被保険者集団が具備すべき4つの条件"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
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
                    questionTitle="選択効果の検証等"
                    :contents="[
                        '正しい',
                        '将来の危険選択に活かすことができる → 活かす目的には適さない', //p69
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約内容の変更"
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
                    questionTitle="共済制度の特徴"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '保険仲立人に該当する販売チャネルもある → 該当する販売チャネルはない', //p165
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
                    questionTitle="保険契約の当事者"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問25〜29
                    ]"
                    :labels="[
                        'ウ', //25
                        'カ', //26
                        'イ', //27
                        'ク', //28
                        'キ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="危険選択の手段"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問30〜34
                    ]"
                    :labels="[
                        'ア', //30
                        'ケ', //31
                        'コ', //32
                        'イ', //33
                        'ク', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="解約返戻金の仕組み"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問35〜39
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
                        { questionTitle: '保険金等の請求手続き', content: '正しい' }, //40
                        { questionTitle: '道徳的危険（モラルリスク）', content: '正しい' }, //41
                        { questionTitle: '保険契約の解除・解約・取消し・無効', content: '保険料不可分の原則が採用されている → 採用されていない<br>保険契約者に支払わないと規定 → 支払うと規定' }, //42 p44
                        { questionTitle: '体格', content: '正しい' }, //43
                        { questionTitle: '選択効果の検証', content: '高い死亡率 → 低い死亡率' }, //44 p70
                        { questionTitle: '超過危険の種類', content: '正しい' }, //45
                        { questionTitle: '責任準備金の積み立て', content: '正しい' }, //46
                        { questionTitle: '剰余金と配当金', content: '正しい' }, //47
                        { questionTitle: '利率変動型積立終身保険（アカウント型保険）', content: '' }, //48
                        { questionTitle: '市場価格調整を利用した生命保険', content: '' }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.shikumi-kojin2025a" next-route="daigaku.shikumi-kojin2025c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
