<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険商品と営業";
const subject = "2024年度 フォームA";
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
                        '災害保障特約',
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
                        '子会社', //問６〜10
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
                    questionTitle="個人保険商品の種類-①"
                    :contents="[
                        '老後の生活資金',
                        '生死混合保険',
                        '生存給付金',
                        '有期年金',
                        '契約者', //問11〜15
                    ]"
                    :labels="[
                        'オ', //11
                        'ア', //12
                        'コ', //13
                        'ウ', //14
                        'エ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険商品の種類-②"
                    :contents="[
                        '災害',
                        '急性心筋梗塞',
                        '6ヶ月',
                        '保険料払込免除',
                        '被保険者', //問16〜20
                    ]"
                    :labels="[
                        'カ', //16
                        'ウ', //17
                        'コ', //18
                        'ケ', //19
                        'キ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="女性の社会進出"
                    :contents="[
                        '正しい',
                        '30歳代 → 20歳代', //p12
                        '老後保障へのニーズ ↔︎ 介護保障へのニーズ', //p12
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
                    questionTitle="外貨建保険"
                    :contents="[
                        '安い為替手数料 → 高い金利<br>予定事業費率を低く → 予定利率を高く', //p65
                        '外貨建 → 円換算後', //p65
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料率に関する対応"
                    :contents="[
                        '死差配当 → 利差配当', //p78
                        '正しい',
                        '完全生命表 → 標準生命表', //p79
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険代理店"
                    :contents="[
                        '一社専属制が認められ、複数の生命保険会社の商品を取り扱いが可能', //p101
                        '正しい',
                        '保険代理店を除く → 含む', //p101
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="戦後の商品政策の変遷"
                    :contents="[
                        'マーケット・セグメント → デビット・システム', //p66
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険"
                    :contents="[
                        '債務者を保険契約者および被保険者 → 被保険者<br>債権者を保険金受取人 → 保険契約者および保険金受取人', //p86
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="財形貯蓄制度の種類"
                    :contents="[
                        '正しい',
                        '正しい',
                        '60歳未満 → 55歳未満', //p94
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="銀行窓販"
                    :contents="[
                        '正しい',
                        '非公開情報の情報開示 → 流出防止<br>訪問販売 → 抱き合わせ販売<br>適切な会社情報 → 適切な商品情報', //p102
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="業界共通教育制度"
                    :contents="[
                        '正しい',
                        '専門課程試験の合否かかわらず → 合格していることが受験要件', //p124-125
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '公的年金の障害給付', content: '2分の1以上 → 3分の1以上' }, //31 p26
                        { questionTitle: '企業の福利厚生費', content: '法定外複利費については → 法定福利費については' }, //32 p33
                        { questionTitle: 'マイナンバー法', content: '正しい' }, //33
                        { questionTitle: '特約', content: '一般生命保険料控除として所得控除の対象 → 一般生命保険料とは別枠で所得控除の対象' }, //34 p49
                        { questionTitle: 'ユニバーサル保険', content: '保険料の払込額の変更はできない → 保険料の払込額を変更できる' }, //35 p80
                        { questionTitle: '付帯サービス', content: '正しい' }, //36
                        { questionTitle: '団体就業不能保障保険', content: '正しい' }, //37
                        { questionTitle: '法人顧客システム', content: '正しい' }, //38
                        { questionTitle: '営業職員の給与体系', content: '地域別最低賃金が適用されない → 適用される' }, //39 p136
                        { questionTitle: '代理店営業組織', content: 'スーパーバイザー → ホールセラー。' }, //40 p146
                        // 問41〜50
                        { questionTitle: '厚生年金保険の保険料', label: 'イ', content: '標準報酬月額と標準賞与額それぞれ' }, //41
                        { questionTitle: '公的介護保険制度のしくみ', label: 'ウ', content: '65歳' }, //42
                        { questionTitle: '保険料率の改定', label: 'オ', content: '' }, //43
                        { questionTitle: '確定拠出年金制度', label: 'ウ', content: '個人' }, //44
                        { questionTitle: '医療保障保険（団体型）', label: 'ア', content: '公的医療保険' }, //45
                        { questionTitle: '特化型営業職員制度', label: 'ア', content: '職域や法人' }, //46
                        { questionTitle: '販売チャネル', label: 'オ', content: '' }, //47
                        { questionTitle: '募集人登録', label: 'イ', content: '保険業法' }, //48
                        { questionTitle: '企業保険の販売チャネル', label: 'ウ', content: '本社直轄' }, //49
                        { questionTitle: '代理店', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons next-route="eigyo2024b" />
        </section>
    </SeihoTestLayout>
</template>
