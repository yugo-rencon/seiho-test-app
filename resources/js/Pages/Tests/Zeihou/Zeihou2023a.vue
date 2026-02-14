<script setup>
import QuestionTemp1 from '@/Components/QuestionTemp1.vue'
import QuestionTemp2 from '@/Components/QuestionTemp2.vue'
import QuestionTemp3 from '@/Components/QuestionTemp3.vue'
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';
import Pagetitle from '@/Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const title = "生命保険と税法"
const subject = '2023年度 フォームA'

</script>

<template>

<SeihoTestLayout :title="title">
    <section class="bg-gray-100 text-gray-800 py-10">

        <!-- ページタイトル -->
        <Pagetitle
            :title="title"
            :description="subject"
        />

        <!-- 問題リスト -->
        <div class="max-w-4xl mx-auto mt-4 space-y-2">
            <QuestionTemp3
                :questionNumber="1"
                :title="title"
                :subject="subject"
                :contents="[
                '遺贈','10ヶ月','被相続人','担保','10万円', // 問１〜５
                ]"
                :labels="[
                'ア','ケ','オ','エ','コ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '6ヶ月','2ヶ月','仮決算','損益計算書','決定', //問６〜10
                ]"
                :labels="[
                'ウ','イ','オ','ク','カ',  //問６〜10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '経済のグローバル化','連結','分社化・持株会社化','税務情報','個別申告方式', //問11〜15
                ]"
                :labels="[
                'エ','コ','ケ','カ','オ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '完全支配関係','納税申告書','は除く','3ヶ月','子法人のすべて', //問16〜20
                ]"
                :labels="[
                'ウ','ク','ケ','イ','カ',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '逓増税率ではなく、超過累進税率。',
                '正しい',
                '所得控除ではなく、税額控除。'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '公益事業用財産は、非課税財産として課税価格に算入されないため、みなし相続財産ではない。',
                '被相続人の死亡により取得した保険金については、その保険金のうち、死亡時までに払い込まれた保険料合計額に対する被相続人が負担した保険料の金額の割合に相当する部分が、課税財産となる。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '資本金1億円超の大法人ではなく、資本金1億円以下の中小法人。',
                '40%超ではなく、50%超。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '保険料は定期部分は損金、養老部分は資産計上となる。',
                '主契約保険料は資産計上となる。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '運営管理機関ではなく、資産管理機関。',
                '正しい',
                '年金払いの老齢給付金については、雑所得として公的年金等控除を適用する。また、一時払いの老齢給付金については、所得税法上の「退職手当等」とみなす。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '確定申告不要制度を選択した場合には、収入金額が課税対象となり、元本取得のための負債利子の額を控除できない。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '1,200万円ではなく、2,000万円。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '原則として法人の営業年度が税法上の事業年度となるが、営業年度等が1年を超える場合には、その営業年度等を1年ごとに区分し、それぞれの期間（最後に1年未満の期間を生じたときは、その1年未満の期間）を事業年度とすることとされている。たとえば営業年度等が1年6ヵ月の場合には、最初の1年間を1事業年度（第1期）とし、残り6ヵ月間を1事業年度（第2期）とする。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '固定資産税の課税標準は、固定資産課税台帳に登録された、その固定資産の賦課期日（毎年1月1日）における価格である。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '営業職員の報酬は一般的に事業所得である。ただし、固定給とそれ以外の部分とに明らかに区分されているときは、固定給部分は給与所得，それ以外の部分は事業所得である。',
                '正しい'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                :contents="[
                // 問31〜35
                '正しい',
                '所得税法の規定による課税標準は、総所得金額、退職所得所得金額の3つである。',
                '正しい',
                '正しい',
                '正しい',
                // 問36〜40
                '定められた一定額は益金の額に算入しない。',
                '正しい',
                '保険料または掛金の払込みは、年金支払開始日前10年以上の期間にわたって定期に行うものであること（一時払契約は不可）',
                '正しい',
                '正しい',
                 //問41〜50
                'A-普通税','A-10万円','B-3分の1','C（A・Bともに正しい）','A-税務調整',
                'C（A・Bともに正しい）','C（A・Bともに正しい）','B-半年','B-事業主','A-登録免許税',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'イ','イ','ウ','オ','ア',  //問41〜45
                'オ','オ','ウ','エ','ア',  //問46〜50
                ]"
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons />

    </section>

    </SeihoTestLayout>


</template>
