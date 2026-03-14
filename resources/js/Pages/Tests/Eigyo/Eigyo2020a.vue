<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険商品と営業";
const subject = "2020年度 フォームA";
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
                    questionTitle="第三分野市場-①"
                    :contents="[
                        '災害補償特約',
                        '所得補償保険',
                        '長期総合保険',
                        '貯蓄性',
                        '現物給付', // 問１〜５
                    ]"
                    :labels="[
                        'カ', //1
                        'ウ', //2
                        'コ', //3
                        'エ', //4
                        'ア', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="第三分野市場-②"
                    :contents="[
                        '業務提携',
                        '競合と協調',
                        '外国保険事業者',
                        '日米保険協議',
                        '子会社', // 問6〜10
                    ]"
                    :labels="[
                        'ケ', //6
                        'オ', //7
                        'カ', //8
                        'ウ', //9
                        'ア', //10
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
                    questionTitle="価値観の変化の要因"
                    :contents="[
                        '正しい',
                        '世代要因 → 年齢要因', //p2-3
                        '年齢要因 → 世代要因', //p2-3
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的介護保険の給付"
                    :contents="[
                        '環境省 → 厚生労働省', //p30
                        '正しい',
                        '費用の2割（一定以上の所得者は3割） → 費用の1割（一定以上の所得者は2割～3割）', //p32
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
                    questionTitle="販売チャネルの多様化"
                    :contents="[
                        '正しい',
                        '従来の募集人規制が廃止された → 従来の募集人規制に加え体制整備義務が導入された', //p101
                        '子会社・兄弟会社に限定 → 限定が解除', //p102
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金の保険料"
                    :contents="[
                        '正しい',
                        '正しい',
                        '勤続年数別の保険料率 → それぞれ定められた保険料率', //p25
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料払込負担の軽減"
                    :contents="[
                        '主契約に充当する方法は開発されていない → 主契約にも充当可能', //p71-72
                        '正しい',
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
                    questionTitle="団体保険"
                    :contents="[
                        '死亡保険金は給付対象外 → 死亡保険金も給付対象', //p96
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人営業機構（直販）"
                    :contents="[
                        '正しい',
                        '一切行っていない → 推進している法人営業組織もある', //p145
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '生活の仕方の変化', content: '正しい' }, //31
                        { questionTitle: '国民年金のしくみ', content: '正しい' }, //32
                        { questionTitle: '福利厚生費', content: '法定福利費 ↔︎ 法定外福利費' }, //33 p33
                        { questionTitle: '代理・代行', content: '正しい' }, //34
                        { questionTitle: '金融商品取引法', content: '契約締結の後に書面で交付 → 契約締結の前に書面で交付' }, //35 p41
                        { questionTitle: '生存保険', content: '正しい' }, //36
                        { questionTitle: '終身年金', content: 'ある一定期間 → 一生涯にわたり' }, //37 p57
                        { questionTitle: '財形保険', content: '個人保険と同様、変更されることはない → 個人保険と異なり、変更されることがある' }, //38 p96
                        { questionTitle: '適格性要素', content: '正しい' }, //39
                        { questionTitle: '代理店営業組織', content: 'スーパーバイザー → ホールセラー。' }, //40 p146
                        // 問41〜50
                        { questionTitle: 'シルバー市場', label: 'ア', content: '65歳' }, //41
                        { questionTitle: '公的介護保険の保険料', label: 'オ', content: '' }, //42
                        { questionTitle: '保険法', label: 'ウ', content: '遺言' }, //43
                        { questionTitle: '危険選択の方法', label: 'エ', content: '面接' }, //44
                        { questionTitle: '確定拠出年金制度', label: 'ウ', content: '国民年金基金連合会' }, //45
                        { questionTitle: '生保財形の特徴', label: 'イ', content: '払込保険料累計額' }, //46
                        { questionTitle: '保険仲立人', label: 'ウ', content: '媒介' }, //47
                        { questionTitle: '変額保険販売資格要件', label: 'ア', content: '専門課程' }, //48
                        { questionTitle: '営業職員の給与体系', label: 'イ', content: '地域' }, //49
                        { questionTitle: '代理店', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="eigyo2021c" next-route="eigyo2020b" />
        </section>
    </SeihoTestLayout>
</template>
