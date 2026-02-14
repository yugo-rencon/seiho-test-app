<script setup>
import QuestionTemp1 from '@/Components/QuestionTemp1.vue'
import QuestionTemp2 from '@/Components/QuestionTemp2.vue'
import QuestionTemp3 from '@/Components/QuestionTemp3.vue'
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';
import Pagetitle from '@/Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const title = "生命保険と税法"
const subject = '2023年度 フォームB'

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
                '所属税','生活費','結婚・子育て','配偶者控除額','110', // 問１〜５
                ]"
                :labels="[
                'オ','カ','ウ','キ','イ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '20','居住用不動産','2,000','2月1日から3月15日','贈与を受けた人', //問６〜10
                ]"
                :labels="[
                'イ','ウ','コ','キ','エ',  //問６〜10
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
                '不動産業者が販売の目的で取得した土地、建物等を貸し付けた場合の所得は、不動産業から生ずる事業所得に該当する。',
                '正しい',
                '不動産所得の金額は、その年中の不動産所得に係る総収入金額から必要経費を控除した金額とする。'
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
                '1,500万円ではなく、2,000万円。',
                '青色申告を選択できる人は、不動産所得，事業所得、山林所得を生ずべき業務を営んでいる人である。',
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
                '正しい',
                '法人擬制説ではなく、法人実在説。',
                '法人実在説ではなく、法人擬制説。'
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
                '逓増税率ではなく、超過累進税率。',
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
                '不動産、船舶は物納に充てられる財産に含まれる。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '道府県民税・市町村民税どちらも均等割と所得割が課される。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '身体の傷害または疾病に基因して支払いを受ける障害給付金、入院給付金等は本人が受け取る場合はもとより、配偶者もしくは直系血族または生計を一にする親族が受け取る場合も非課税である。'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                :contents="[
                // 問31〜35
                '流通税は、財産移転の事実に基づいて課税されるもので、印紙税、不動産所属税等が該当する。',
                '正しい',
                '正しい',
                '遺言できる者は満15歳以上で意思能力を有する者に限られる。',
                '正しい',
                // 問36〜40
                '正しい',
                '正しい',
                '13%ではなく、7%',
                '正しい',
                '正しい',
                 //問41〜50
                'B-40万円','A-との選択により','B-心身障害者扶養共済制度','C（A・Bともに正しい）','C（A・Bともに正しい）',
                'C（A・Bともに正しい）','A-均等割額と法人税割額','B-第1回保険料充当金領収証','B-事業主','A-登録免許税',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'ウ','ア','エ','オ','オ',  //問41〜45
                'オ','イ','ウ','エ','ア',  //問46〜50
                ]"
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons />

    </section>

    </SeihoTestLayout>


</template>
