<script setup>
import QuestionTemp1 from '@/Components/QuestionTemp1.vue'
import QuestionTemp2 from '@/Components/QuestionTemp2.vue'
import QuestionTemp3 from '@/Components/QuestionTemp3.vue'
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';
import Pagetitle from '@/Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const title = "生命保険と税法"
const subject = '2021年度 フォームB'


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
                questionTitle="所属税の生命保険料控除-①"
                :contents="[
                '6親等','4万円','5年','感染症','身体の傷害', // 問１〜５
                ]"
                :labels="[
                    'オ', //1
                    'イ', //2
                    'ウ', //3
                    'キ', //4
                    'ク', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                questionTitle="所属税の生命保険料控除-②"
                :contents="[
                '被保険者','10年','60歳','退職年金','1回', //問６〜10
                ]"
                :labels="[
                    'キ', //6
                    'エ', //7
                    'コ', //8
                    'カ', //9
                    'ウ', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                questionTitle="贈与税-①"
                :contents="[
                '法人','選挙の候補者','110万円','20年','2,000万円', //問11〜15
                ]"
                :labels="[
                    'キ', //11
                    'ク', //12
                    'イ', //13
                    'コ', //14
                    'オ', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                questionTitle="贈与税-②"
                :contents="[
                '2月1日','納税地','利子税','10万円','5年', //問16〜20
                ]"
                :labels="[
                    'ア', //16
                    'ケ', //17
                    'コ', //18
                    'ウ', //19
                    'イ', //20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                questionTitle="各種所得"
                :contents="[
                '所得税法ではなく、租税特別措置法。',
                '正しい',
                '他人の多人の物を保管する場合の所得は事業所得または雑所得に該当し、そうでない場合の所得は不動産所得に該当する。'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                questionTitle="遺産分割の方法"
                :contents="[
                '正しい',
                '遺言をできる者は満15歳以上で意思能力を有するものに限られる。',
                '法定相続分ではなく遺留分。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                questionTitle="法人の種類と課税の範囲"
                :contents="[
                'NHK等の公共法人は非課税。',
                '学校法人や宗教法人等の公益法人等は、本来の事業については非課税。収益事業に係る所得については課税。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                questionTitle="確定拠出年金の税制上の取扱い"
                :contents="[
                '正しい',
                '老齢給付金については、年金払い、一時払いともに企業型と個人型の課税方法の区別はない。',
                '障害給付金は非課税。老齢給付金は、雑所得として公的年金等控除を適用する。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                questionTitle="生命保険会社と税"
                :contents="[
                '正しい',
                '8割という限度はない。また責任準備金同様確定債務という考え方による。',
                '生命保険会社が受取り配当益金不算入の計算を行ったときは、その金額だけ契約者配当の損金算入を否認することを要するから、実質的には生命保険会社には受取配当の益金不算入の制度は適用されない。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                questionTitle="所得税の所得"
                :contents="[
                '正しい',
                '公的年金等控除の適用がある。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                questionTitle="相続税の申告と納税"
                :contents="[
                '10ヶ月以内に行わなければならない。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                questionTitle="連結納税制度"
                :contents="[
                '外国法人は除く。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                questionTitle="固定資産税"
                :contents="[
                '正しい',
                '正しい',
                '住宅用地のうち200㎥までの部分については、評価額の6分の1、また200㎥を超える部分については評価額の3分の1がそれぞれ課税表とされる。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                questionTitle="法人が支払う事業保険の保険料の取扱い"
                :contents="[
                '正しい',
                '1/10が給与、9/10が資産計上される。',
                '正しい'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                                :items="[
                    // 問31〜40
                    { questionTitle: '譲渡所得', content: '資産をその取得日以後5年以内に譲渡したことによる所得を短期譲渡所得という。' }, //31
                    { questionTitle: '租税特別措置法の規定による課税標準', content: '正しい' }, //32
                    { questionTitle: '確定申告定', content: '正しい' }, //33
                    { questionTitle: '青色申告制度', content: '正しい' }, //34
                    { questionTitle: '保険金の非課税額', content: '非課税限度額 = 500万円 × 法定相続人の数' }, //35
                    { questionTitle: '暦年課税・前年課税', content: '所得税は暦年課税主義、住民税は前年課税主義である。' }, //36
                    { questionTitle: '居住用超高層建築物の不動産取得税', content: '1階を100として、階が1つ増えるごとに10/39を加算して求める。' }, //37
                    { questionTitle: '財形住宅貯蓄積立保険', content: '財形貯蓄積立保険ではなく、財形年金と合わせて550万円までの利子は非課税とされる。' }, //38
                    { questionTitle: '転換時の税務', content: '正しい' }, //39
                    { questionTitle: '営業職員報酬', content: '固定給とそれ以外の部分とに明らかに区分されている時は、固定給部分は給与所得、それ以外の部分は事業所得である。' }, //40
                    // 問41〜50
                    { questionTitle: '所得税の所得控除', label: 'イ', content: '15種類' }, //41
                    { questionTitle: '医療費控除（セルフメディケーション）', label: 'オ', content: '' }, //42
                    { questionTitle: '雑所得', label: 'ウ', content: '必要経費' }, //43
                    { questionTitle: '税額控除', label: 'エ', content: '配当控除' }, //44
                    { questionTitle: '未成年者控除', label: 'オ', content: '' }, //45
                    { questionTitle: '法人税の課税標準', label: 'オ', content: '' }, //46
                    { questionTitle: '同族会社', label: 'ア', content: '3人' }, //47
                    { questionTitle: '個人の事業税', label: 'ア', content: '第3種' }, //48
                    { questionTitle: '確定給付企業年金制度の開始', label: 'ア', content: '年金規約' }, //49
                    { questionTitle: '団体定期保険の保険料', label: 'ウ', content: '生命保険料控除' }, //50
                ]"
                
            />
        </div>

         <!-- ボタングループ -->
        <TestNavigationButtons previous-route="zeihou2021a" next-route="zeihou2021c" />

    </section>

    </SeihoTestLayout>


</template>
