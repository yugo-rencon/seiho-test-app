<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険商品と営業";
const subject = "2020年度 フォームB";
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
                    questionTitle="個人保険商品の種類-①"
                    :contents="[
                        '老後の生活資金',
                        '生死混合保険',
                        '生存給付金',
                        '有期年金',
                        '契約者', // 問１〜５
                    ]"
                    :labels="[
                        'オ', //1
                        'ア', //2
                        'コ', //3
                        'ウ', //4
                        'エ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険商品の種類-②"
                    :contents="[
                        '災害',
                        '急性心筋梗塞',
                        '6ヶ月',
                        '不要（無料）',
                        '保険料払込免除', // 問6〜10
                    ]"
                    :labels="[
                        'カ', //6
                        'ク', //7
                        'コ', //8
                        'エ', //9
                        'イ', //10
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
                    questionTitle="女性の社会進出"
                    :contents="[
                        '30歳代 → 20歳代', //p12
                        '死亡保障 → 老後保障<br>老後保障 → 介護保障', //p12
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険商品の構造"
                    :contents="[
                        '一定の偶然の事故によって生ずることのある損害をてん補すること → 人の生存又は死亡に関し一定の保険給付を行うこと', //p46
                        '有期払 → 短期払', //p49
                        '正しい',
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
                    questionTitle="業界共通教育制度"
                    :contents="[
                        '正しい',
                        '変額保険販売資格試験 → 応用課程試験', //p125
                        'ライフ・コンサルタントは専門課程試験合格者<br>応用課程試験の受験要件は、専門課程試験に合格していること', //p125
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="戦後の商品政策の変遷"
                    :contents="[
                        '正しい',
                        '一時払終身保険 → 5年満期の一時払養老保険<br>5年満期の一時払養老保険 → 10年満期の一時払養老保険', //p66
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料率に関する近年の商品対応"
                    :contents="[
                        '保険金受取人 → 契約者', //p78
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
                    questionTitle="銀行窓販の弊害防止措置"
                    :contents="[
                        '影響を及ぼすこと → 影響を及ぼさないこと', //p102
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="情報活用型マーケティング"
                    :contents="[
                        '正しい',
                        '再販売等に活用するに至っていない → 活用することが一般的', //p110
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '公的年金の老齢給付', content: '正しい' }, //31
                        { questionTitle: '加入後の自在性', content: '移行制度 → 転換制度' }, //32 p72-74
                        { questionTitle: '福利厚生費', content: '法定福利費 ↔︎ 法定外福利費' }, //33 p33
                        { questionTitle: '確定拠出年金制度', content: '企業の追加拠出が必要 → 不要' }, //34 p89
                        { questionTitle: '金融商品取引法', content: '契約締結の後に書面で交付 → 契約締結の前に書面で交付' }, //35 p41
                        { questionTitle: '生存保険', content: '正しい' }, //36
                        { questionTitle: '特別勘定', content: '正しい' }, //37
                        { questionTitle: '団体就業不能保障保険', content: '正しい' }, //38
                        { questionTitle: '心身障害者扶養者生命保険', content: '正しい' }, //39
                        { questionTitle: '支社の配置', content: 'これまで〜の説明 ↔ 近年では〜の説明' }, //40 p140
                        // 問41〜50
                        { questionTitle: '年金改革', label: 'イ', content: 'マクロ経済スライド' }, //41
                        { questionTitle: '公的介護保険の保険料', label: 'オ', content: '' }, //42
                        { questionTitle: '保険料の払込に関する特約', label: 'ウ', content: '団体扱特約' }, //43
                        { questionTitle: '危険選択の方法', label: 'エ', content: '面接' }, //44
                        { questionTitle: '団体保険', label: 'ウ', content: 'ヒューマン・ヴァリュー特約' }, //45
                        { questionTitle: '医療保障保険（団体型）', label: 'ア', content: '公的医療保険' }, //46
                        { questionTitle: '通信販売', label: 'エ', content: '加入保険金額' }, //47
                        { questionTitle: '販売成績', label: 'オ', content: '' }, //48
                        { questionTitle: '機関長', label: 'イ', content: '個別' }, //49
                        { questionTitle: '代理店', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="eigyo2020a" next-route="eigyo2020c" />
        </section>
    </SeihoTestLayout>
</template>
