<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険商品と営業";
const subject = "2020年度 フォームC";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 text-gray-800 py-10">
            <!-- ページタイトル -->
            <Pagetitle :title="title" :description="subject" />
            <!-- 問題リスト -->
            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="近年の商品対応と今後の方向性-①"
                    :contents="[
                        '5年ごと配当',
                        '低解約返戻金',
                        '引受基準緩和',
                        '第三分野',
                        '生前給付', // 問１〜５
                    ]"
                    :labels="[
                        'エ', //1
                        'ク', //2
                        'イ', //3
                        'キ', //4
                        'オ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="近年の商品対応と今後の方向性-②"
                    :contents="[
                        '受領確認',
                        'ユニバーサル保険',
                        '銀行窓販',
                        '為替レート',
                        'カードサービス', // 問6〜10
                    ]"
                    :labels="[
                        'イ', //6
                        'オ', //7
                        'ケ', //8
                        'ウ', //9
                        'エ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体年金保険-①"
                    :contents="[
                        '規約型',
                        'GIC（guaranteed interest contract：利率保証契約）',
                        '拠出型企業年金',
                        'B（型）年金',
                        '国民年金基金', // 問11〜15
                    ]"
                    :labels="[
                        'キ', //11
                        'オ', //12
                        'ケ', //13
                        'イ', //14
                        'ク', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体年金保険-②"
                    :contents="[
                        '団体生存保険',
                        '公務員',
                        '新企業年金保険',
                        'A（型）年金',
                        '合同', // 問16〜20
                    ]"
                    :labels="[
                        'カ', //16
                        'オ', //17
                        'キ', //18
                        'ケ', //19
                        'ク', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金の給付"
                    :contents="[
                        '正しい',
                        '障害基礎年金 ↔︎ 障害厚生年金', //p26
                        '老齢厚生年金相当額の3分の2 → 4分の3', //p26
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="医療保障等を主たる目的とした保険（特約）"
                    :contents="[
                        '認知症による要介護状態・寝たきり状態の保障 → 公的介護保険制度の上乗せ保障', //p60
                        '正しい',
                        '余命9ヶ月 → 余命6ヶ月<br>2000万円を上限 → 3000万円を上限', //p61
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="マイナンバー法"
                    :contents="[
                        '未成年者を除くすべての人 → 住民票を有するすべての人', //p40
                        '正しい',
                        '重大個人情報 → 特定個人情報', //p40
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="外貨建保険"
                    :contents="[
                        '安い為替手数料 → 高い金利<br>予定事業費率を低く → 予定利率を高く', //p65
                        '外貨建 → 円換算後', //p65
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="総合福祉団体定期保険"
                    :contents="[
                        '保険金は支払われる → 支払われない', //p85
                        '契約の対象外 → 契約の対象', //p84
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="貯蓄の動向"
                    :contents="[
                        '正しい',
                        '正しい',
                        '株式・株式投資信託等の有価証券 → 定期性預貯金<br>定期性預貯金 → 通貨性預貯金', //p16
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険商品の特約"
                    :contents="[
                        '正しい',
                        '被保険者のモラルリスクに応じて → 健康状態が一定の危険の範囲を超えているが危険の度合いに応じて', //p49
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体定期保険および団体信用生命保険"
                    :contents="[
                        '正しい',
                        '正しい',
                        '債務者：保険契約者および被保険者 → 被保険者<br>債権者：保険金受取人 → 保険契約者および保険金受取人', //p86
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険"
                    :contents="[
                        '正しい',
                        '変動保険金（毎日変動） → 変動保険金（毎月変動）', //p64
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="通信販売とインターネット通販"
                    :contents="[
                        '問題となりにくい → 問題となりやすい', //p104
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: 'ライフ・プランニング', content: '正しい' }, //31
                        { questionTitle: '公的介護保険制度の運営主体', content: '運営主体は国 → 各市区町村' }, //32 p29
                        { questionTitle: '福利厚生費', content: '法定福利費 ↔︎ 法定外福利費' }, //33 p33
                        { questionTitle: '保険料払込方法', content: '一時払 → 前納' }, //34 p50
                        { questionTitle: '金融商品取引法', content: '契約締結の後に書面で交付 → 契約締結の前に書面で交付' }, //35 p41
                        { questionTitle: '生存保険', content: '正しい' }, //36
                        { questionTitle: '財形貯蓄制度', content: '58歳未満 → 55歳未満<br>3年以上の期間 → 5年以上の期間' }, //37 p94
                        { questionTitle: '一時払退職後終身保険', content: '1年以上 → 2年以上<br>前後6か月以内 → 前後1年以内' }, //38 p97
                        { questionTitle: '法人顧客システム', content: '正しい' }, //39
                        { questionTitle: '機関組織構成', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '年金改革', label: 'イ', content: '第3号' }, //41
                        { questionTitle: '公的介護保険の保険料', label: 'オ', content: '' }, //42
                        { questionTitle: '保険料率の改定', label: 'イ', content: '平均寿命' }, //43
                        { questionTitle: '危険選択の方法', label: 'エ', content: '面接' }, //44
                        { questionTitle: '消費者信用団体生命保険', label: 'ウ', content: '1年' }, //45
                        { questionTitle: '特化型営業職員制度', label: 'ア', content: '職域や法人' }, //46
                        { questionTitle: '募集人登録', label: 'ア', content: '保険業法' }, //47
                        { questionTitle: '営業職員の退職金', label: 'オ', content: '' }, //48
                        { questionTitle: '企業保険の販売チャネル', label: 'ウ', content: '本社直轄' }, //49
                        { questionTitle: '代理店', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="eigyo2020b" />
        </section>
    </SeihoTestLayout>
</template>
