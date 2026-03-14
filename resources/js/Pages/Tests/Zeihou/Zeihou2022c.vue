<script setup>
import QuestionTemp1 from '@/Components/QuestionTemp1.vue'
import QuestionTemp2 from '@/Components/QuestionTemp2.vue'
import QuestionTemp3 from '@/Components/QuestionTemp3.vue'
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';
import Pagetitle from '@/Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const title = "生命保険と税法"
const subject = '2022年度 フォームC'


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
                questionTitle="相続税の税額計算-①"
                :contents="[
                '3年','基礎控除','法定相続分','相続税の総額','2割', // 問１〜５
                ]"
                :labels="[
                    'イ', //1
                    'カ', //2
                    'コ', //3
                    'ケ', //4
                    'ア', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                questionTitle="相続税の税額計算-②"
                :contents="[
                '公益','死亡退職金','なる','1億6,000万円','10年', //問６〜10
                ]"
                :labels="[
                    'カ', //6
                    'キ', //7
                    'コ', //8
                    'ア', //9
                    'ウ', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                questionTitle="法人税-①"
                :contents="[
                '直接税','比例税率','法人擬制説','無償','税務調整', //問11〜15
                ]"
                :labels="[
                    'カ', //11
                    'キ', //12
                    'ク', //13
                    'コ', //14
                    'エ', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                questionTitle="法人税-②"
                :contents="[
                '内国法人','二重課税','取得原価','会社更生法','保険業法', //問16〜20
                ]"
                :labels="[
                    'カ', //16
                    'キ', //17
                    'ウ', //18
                    'イ', //19
                    'ク', //20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                questionTitle="退職所得の金額"
                :contents="[
                'ウの解説を参照',
                'ウの解説を参照',
                '正しい<br>退職所得の金額 =（収入金額 - 退職所得控除額）× 1/2<br>退職所得控除額（勤続年数20年超） = 800万円 + 70万円 ✕（勤続年数-20年）'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                questionTitle="相続"
                :contents="[
                '相続税と贈与税はいずれも相続税法という一つの法律の中で規定されており、財産の評価についても同じ基準に従って行われる。',
                '財産の移転には、「相続」「贈与」「譲渡」という３つの方法がある。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                questionTitle="相続税の申告と納税"
                :contents="[
                '正しい',
                '延納が認められる期間は通常５年以内である。',
                '物納に充てられる財産の種類と順序は、①国債、地方債、上場株式等、②上場株式および不動産のうち物納劣後財産に該当するもの③非上場株式等'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                questionTitle="法人税法における別段の定め"
                :contents="[
                '受取配当額の95%相当額。',
                '法人の支出した寄附金については税法は一定の限度額を定め、これを超える部分については損金に参入しないものとしている。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                questionTitle="生命保険会社と税"
                :contents="[
                '「確定債権」ではなく「確定債務」。',
                '正しい',
                '（総資産の帳簿価額 - 総負債の帳簿価額） × 60/100'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                questionTitle="所得税の所得控除"
                :contents="[
                '120万円ではなく、200万円',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                questionTitle="扶養控除"
                :contents="[
                '正しい',
                '合計所得金額が48万円以下であるもの。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                questionTitle="法人税額の計算"
                :contents="[
                '所得金額×23.2%',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                questionTitle="個人の住民税"
                :contents="[
                '個人の住民税は、所得に関係なく均等に課せられる「均等割」と所得の額によって課せられる「所得割」から成り立っている。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                questionTitle="確定拠出年金制度の税制上の取扱い"
                :contents="[
                '正しい',
                '正しい',
                '障害給付金は非課税である。'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                                :items="[
                    // 問31〜40
                    { questionTitle: '標準税率', content: '正しい' }, //31
                    { questionTitle: '特定支出控除', content: '給与所得者が業務上必要と認められる費用で自己が負担した通勤費などを支出した場合に、その金額の合計額が別途定められた金額を超えるときは、所定の計算方法にて算出される金額を、給与所得控除後の給与等の金額から控除した金額を「給与所得の金額」とすることができる。これを特定支出控除とはという。' }, //32
                    { questionTitle: '相続の放棄', content: '相続の放棄があった場合には代襲相続の権利もない。' }, //33
                    { questionTitle: '生命保険契約の権利の評価', content: '生命保険契約で保険事故が発生していないものに関する権利の評価は、相続開始時において当該契約を解約するとした場合に支払われる解約返戻金の額によって評価する。' }, //34
                    { questionTitle: '教育資金一括贈与の非課税措置', content: '3000万円ではなく、1500万円。' }, //35
                    { questionTitle: '法人税の種類', content: '正しい' }, //36
                    { questionTitle: '上場株式の評価', content: '最も低い価格により評価する。' }, //37
                    { questionTitle: '固定資産税の課税標準', content: '土地と家屋の価格については3年ごとに評価替えを行う。' }, //38
                    { questionTitle: '確定拠出年金のポータビリティ', content: '正しい' }, //39
                    { questionTitle: '営業職員報酬の必要経費', content: '正しい' }, //40
                    // 問41〜50
                    { questionTitle: '居住用財産譲渡の特例', label: 'ア', content: '自己' }, //41
                    { questionTitle: '雑損控除', label: 'ウ', content: '5万円' }, //42
                    { questionTitle: '遺留分', label: 'ウ', content: '3分の1' }, //43
                    { questionTitle: '相続税の未成年者控除', label: 'ア', content: '18歳' }, //44
                    { questionTitle: '相続時精算課税制度', label: 'ウ', content: '18歳' }, //45
                    { questionTitle: '法人の確定申告', label: 'ア', content: '2ヶ月' }, //46
                    { questionTitle: '法人の住民税', label: 'ア', content: '法人税制' }, //47
                    { questionTitle: '不動産取得税', label: 'イ', content: '道府県税' }, //48
                    { questionTitle: '保険金等受取時の税務', label: 'オ', content: '' }, //49
                    { questionTitle: '最低課税方式', label: 'エ', content: '契約者配当準備金損金算入額' }, //50
                ]"
                
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons previous-route="zeihou2022b" next-route="zeihou2021a" />

    </section>

    </SeihoTestLayout>


</template>
